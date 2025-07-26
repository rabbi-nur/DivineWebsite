(function() {
  function parseCoverage(str) {
    if (!str) return [0, 0, 0, 0];
    let parts = str.trim().split(/\s+/).map(Number);
    switch (parts.length) {
      case 1: return [parts[0], parts[0], parts[0], parts[0]];
      case 2: return [parts[0], parts[1], parts[0], parts[1]];
      case 3: return [parts[0], parts[1], parts[2], parts[1]];
      case 4: return parts;
      default: return [0, 0, 0, 0];
    }
  }

  function parseColors(str) {
    if (!str) return ['black', 'black', 'black', 'black'];
    let parts = str.trim().split(/\s+/);
    switch (parts.length) {
      case 1: return [parts[0], parts[0], parts[0], parts[0]];
      case 2: return [parts[0], parts[1], parts[0], parts[1]];
      case 3: return [parts[0], parts[1], parts[2], parts[1]];
      case 4: return [parts[0], parts[1], parts[2], parts[3]];
      default: return ['black', 'black', 'black', 'black'];
    }
  }

  function createSVG(box) {
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.classList.add('edgy-svg');
    box.appendChild(svg);
    return svg;
  }

  function addLine(svg, x1, y1, x2, y2, cls, color) {
    const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
    line.setAttribute('class', cls);
    line.setAttribute('x1', x1);
    line.setAttribute('y1', y1);
    line.setAttribute('x2', x2);
    line.setAttribute('y2', y2);
    line.setAttribute('stroke', color);
    svg.appendChild(line);
  }

  function drawBorders(box) {
    const svg = box.querySelector('svg.edgy-svg') || createSVG(box);
    while (svg.firstChild) svg.removeChild(svg.firstChild);

    const coverage = parseCoverage(box.dataset.edgy || '');
    const colors = parseColors(box.dataset.edgyColor || '');
    const w = box.clientWidth;
    const h = box.clientHeight;

    const pos = (i) => {
      const start = coverage[i] / 100;
      const end = 1 - start;
      return [start, end];
    };

    // Top
    let [ts, te] = pos(0);
    if (te > ts) addLine(svg, w * ts, 0, w * te, 0, 'top', colors[0]);

    // Right
    let [rs, re] = pos(1);
    if (re > rs) addLine(svg, w, h * rs, w, h * re, 'right', colors[1]);

    // Bottom
    let [bs, be] = pos(2);
    if (be > bs) addLine(svg, w * bs, h, w * be, h, 'bottom', colors[2]);

    // Left
    let [ls, le] = pos(3);
    if (le > ls) addLine(svg, 0, h * ls, 0, h * le, 'left', colors[3]);
  }

  function initEdgy() {
    document.querySelectorAll('.edgy-box').forEach(drawBorders);
  }

  window.addEventListener('load', initEdgy);
  window.addEventListener('resize', () => {
    clearTimeout(window._edgyResizeTimeout);
    window._edgyResizeTimeout = setTimeout(initEdgy, 200);
  });
})();