<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clients Grid Clean</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fff;
    }

    .clients-section {
      padding: 60px 20px;
      background-color: #fff;
      text-align: center;
    }

    .section-title {
      font-size: 2rem;
      margin-bottom: 40px;
      color: #001B2E;
    }

    .clients-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px; /* adds space between boxes */
      max-width: 1200px;
      margin: 0 auto;
    }

    .client-logo:nth-child(1) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(2) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(3) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(4) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(5) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(6) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(7) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }
	.client-logo:nth-child(8) {
      background: #fff;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 140px;
      box-shadow: 1px 1px 10px 3px #ccc; 
    }

    .client-logo img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
      filter: grayscale(100%);
      transition: filter 0.3s ease;
    }
	
	.client-logo img:hover {
      filter: grayscale(5%);
    }

    /* Responsive: 2 columns */
    @media (max-width: 992px) {
      .clients-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* Responsive: 1 column */
    @media (max-width: 576px) {
      .clients-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <section class="clients-section">
    <h2 class="section-title">Our Clients</h2>
    <div class="clients-grid">
      <div class="client-logo"><img src="img/logo-1.png" alt="Client 1" /></div>
      <div class="client-logo"><img src="img/logo-2.png" alt="Client 2" /></div>
      <div class="client-logo"><img src="img/logo-3.png" alt="Client 3" /></div>
      <div class="client-logo"><img src="img/logo-4.png" alt="Client 4" /></div>
      <div class="client-logo"><img src="img/logo-5.png" alt="Client 5" /></div>
      <div class="client-logo"><img src="img/logo-6.png" alt="Client 6" /></div>
      <div class="client-logo"><img src="img/logo-7.png" alt="Client 7" /></div>
      <div class="client-logo"><img src="img/logo-8.png" alt="Client 8" /></div>
    </div>
  </section>

</body>
</html>
