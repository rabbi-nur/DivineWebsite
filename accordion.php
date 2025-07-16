<?php
$accProcesses = [
    [
        "name" => "Spinning",
        "class" => "acc-spinning",
        "img" => "img/spinning.JPG",
        "anim" => "https://assets7.lottiefiles.com/packages/lf20_q5pk6p1k.json",
        "text" => "Transforming cotton into yarn with precision."
    ],
    [
        "name" => "Knitting",
        "class" => "acc-knitting",
        "img" => "img/knitting.JPG",
        "anim" => "https://assets7.lottiefiles.com/packages/lf20_5qpi0r8z.json",
        "text" => "Knitting premium fabrics with speed and accuracy."
    ],
    [
        "name" => "Dyeing",
        "class" => "acc-dyeing",
        "img" => "img/dyeing.JPG",
        "anim" => "https://assets7.lottiefiles.com/packages/lf20_qdbw5qfs.json",
        "text" => "Eco-friendly dyeing for vibrant, lasting colors."
    ],
    [
        "name" => "All Over Printing",
        "class" => "acc-aop",
        "img" => "img/aop.JPG",
        "anim" => "https://assets1.lottiefiles.com/packages/lf20_oGlWy5.json",
        "text" => "Precision printing for premium designs."
    ],
    [
        "name" => "Placement Printing",
        "class" => "acc-placement",
        "img" => "img/1.webp",
        "anim" => "https://assets8.lottiefiles.com/packages/lf20_qatvfp0f.json",
        "text" => "Detailed placement printing solutions."
    ],
    [
        "name" => "Embroidery",
        "class" => "acc-embroidery",
        "img" => "img/embroidery.JPG",
        "anim" => "https://assets5.lottiefiles.com/packages/lf20_qp1q7mjk.json",
        "text" => "Elegant embroidery craftsmanship."
    ],
    [
        "name" => "Yarn Dyeing",
        "class" => "acc-yarn",
        "img" => "img/yarn dyeing-min.JPG",
        "anim" => "https://assets7.lottiefiles.com/packages/lf20_6kbrv8hq.json",
        "text" => "Colorful yarn for unique designs."
    ],
    [
        "name" => "Dyeing & Finishing",
        "class" => "acc-finishing",
        "img" => "img/dyeing & finishing.JPG",
        "anim" => "https://assets2.lottiefiles.com/packages/lf20_x62chJ.json",
        "text" => "Finishing touches for premium quality."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accordion Panels - Full Version</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
<style>
  .acc-container {
    display: flex;
    height: 100vh;
    width: 100vw;
  }

  .acc-panel {
    position: relative;
    background-size: cover;
    background-position: center;
    overflow: hidden;
    transition: flex 0.5s ease;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .acc-panel {
    flex: 1;
    position: relative;
  }

  /* Hover glow effect */
  .acc-panel:not(.acc-active):hover::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, 0.2);
    pointer-events: none;
  }

  /* Gradient overlay for inactive panels */
  .acc-overlay-inactive {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0.6;
    z-index: 1;
  }

  /* Gradients for each process */
  .acc-spinning .acc-overlay-inactive { background: linear-gradient(45deg, #7cb342, rgba(0, 0, 0, 0.6)); }
  .acc-knitting .acc-overlay-inactive { background: linear-gradient(45deg, #03a9f4, rgba(0, 0, 0, 0.6)); }
  .acc-dyeing .acc-overlay-inactive { background: linear-gradient(45deg, #e91e63, rgba(0, 0, 0, 0.6)); }
  .acc-aop .acc-overlay-inactive { background: linear-gradient(45deg, #ff9800, rgba(0, 0, 0, 0.6)); }
  .acc-placement .acc-overlay-inactive { background: linear-gradient(45deg, #9c27b0, rgba(0, 0, 0, 0.6)); }
  .acc-embroidery .acc-overlay-inactive { background: linear-gradient(45deg, #8bc34a, rgba(0, 0, 0, 0.6)); }
  .acc-yarn .acc-overlay-inactive { background: linear-gradient(45deg, #00bcd4, rgba(0, 0, 0, 0.6)); }
  .acc-finishing .acc-overlay-inactive { background: linear-gradient(45deg, #ffc107, rgba(0, 0, 0, 0.6)); }

  /* Inactive heading text */
  .acc-heading-vertical {
    writing-mode: vertical-rl;
    text-orientation: mixed;
    transform: rotate(180deg);
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
    text-align: center;
    z-index: 2;
    pointer-events: none;
  }

  .acc-panel.acc-active .acc-heading-vertical {
    opacity: 0;
  }

  /* Active panel layout */
  .acc-content {
    display: none;
    width: 100%;
    height: 100%;
    padding: 20px;
    box-sizing: border-box;
    justify-content: space-between;
    align-items: stretch;
    z-index: 5;
    opacity: 0;
  }

  .acc-panel.acc-active .acc-content {
    display: flex;
  }

  .acc-left, .acc-right {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    background: rgba(0,0,0,0.5);
    border-radius: 8px;
  }

  .acc-left {
    margin-right: 10px;
  }

  .acc-animation-box {
    flex: 1;
    background: #1a1a1a;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
    border-radius: 10px;
  }

  .acc-lottie-container {
    width: 150px;
    height: 150px;
  }

  .acc-text-box {
    flex: 0 0 auto;
    padding: 15px;
    background: rgba(0, 0, 0, 0.6);
    border-radius: 8px;
  }

  .acc-text-box h2 {
    color: #6cbf00;
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .acc-text-box p {
    font-size: 1rem;
    margin-bottom: 15px;
  }

  .acc-btn {
    background: #6cbf00;
    color: white;
    padding: 10px 16px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
  }

  .acc-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }

  @media (max-width: 768px) {
    .acc-panel.acc-active .acc-content {
      flex-direction: column;
    }
    .acc-left, .acc-right {
      flex: unset;
      width: 100%;
      margin: 0 0 10px;
    }
  }
</style>
</head>
<body>

<div class="acc-container">
<?php foreach($accProcesses as $index => $p): ?>
    <div class="acc-panel <?= $p['class'] ?> <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
        <div class="acc-overlay-inactive"></div>
        <div class="acc-heading-vertical"><?= strtoupper($p['name']) ?></div>
        <div class="acc-content">
            <div class="acc-left">
                <div class="acc-animation-box">
                    <div class="acc-lottie-container" id="acc-lottie<?= $index ?>"></div>
                </div>
                <div class="acc-text-box">
                    <h2><?= $p['name'] ?></h2>
                    <p><?= $p['text'] ?></p>
                    <a href="#" class="acc-btn">Read More</a>
                </div>
            </div>
            <div class="acc-right">
                <div class="acc-image-box">
                    <img src="<?= $p['img'] ?>" alt="">
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>

<script>
const accPanels = document.querySelectorAll('.acc-panel');

function resizeAccPanels(activePanel) {
    accPanels.forEach(panel => {
        const flexValue = (panel === activePanel) ? '65%' : `${35 / (accPanels.length - 1)}%`;
        gsap.to(panel, { flexBasis: flexValue, duration: 0.5 });
    });
}
resizeAccPanels(document.querySelector('.acc-panel.acc-active'));

accPanels.forEach(panel => {
    panel.addEventListener('click', () => {
        if (panel.classList.contains('acc-active')) return;
        accPanels.forEach(p => {
            p.classList.remove('acc-active');
            gsap.to(p.querySelector('.acc-content'), { opacity: 0, duration: 0.3 });
        });
        panel.classList.add('acc-active');
        resizeAccPanels(panel);
        gsap.to(panel.querySelector('.acc-content'), { opacity: 1, duration: 0.5, delay: 0.3 });
    });
});

// Lottie animations
const accAnimations = <?= json_encode(array_column($accProcesses, 'anim')); ?>;
accAnimations.forEach((animPath, index) => {
    lottie.loadAnimation({
        container: document.getElementById(`acc-lottie${index}`),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: animPath
    });
});
</script>

</body>
</html>