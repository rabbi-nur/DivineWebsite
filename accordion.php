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
<div class="acc-container">
<?php foreach($accProcesses as $index => $p): ?>
<?php endforeach; ?>
<!-- Spinning Section -->
    <div class="acc-panel acc-spinning <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
    <!-- Knitting Section -->
    <div class="acc-panel acc-knitting <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
        <!-- Dyeing Section -->
    <div class="acc-panel acc-dyeing <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
        <!-- AOP Section -->
    <div class="acc-panel acc-aop <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
        <!-- Placement Section -->
    <div class="acc-panel acc-placement <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
        <!-- Embroidery Section -->
    <div class="acc-panel acc-embroidery <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
        <!-- Yarn Dyeing Section -->
    <div class="acc-panel acc-yarn <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
        <!-- Dyeing & Finishing Section -->
    <div class="acc-panel acc-finishing <?= $index === 0 ? 'acc-active' : '' ?>" style="background-image:url('<?= $p['img'] ?>')">
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
</div>

<script>


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