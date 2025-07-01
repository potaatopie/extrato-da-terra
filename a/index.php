<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrato da Terra</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<header class="hero">
    <div class="imagem-degrade">
        <img src="imgs/img1.png" alt="Produtos naturais" class="hero-img">
    </div>
    <div class="hero-content">
        <h1>Bem-vindo à Extrato da Terra</h1>
        <p>Somos uma loja especializada em produtos naturais, saudáveis e sustentáveis.
        Nosso compromisso é oferecer qualidade, bem-estar e conexão com a natureza.</p>
        <div class="buttons">
            <a href="https://wa.me/qr/V6ZNESQR2FQVO1" class="whatsapp-button" target="_blank">Fale conosco no WhatsApp</a>
        </div>
    </div>
</header>

<section class="about">
    <h2>Nossa história</h2>
    <div class="about-content">
        <p>A Extrato da Terra nasceu há 10 anos com um propósito verdadeiro: promover saúde, bem-estar e qualidade de vida por meio da força da natureza. Tudo começou com um sonho simples, mas cheio de significado: viver de forma mais equilibrada e ajudar outras pessoas a fazerem o mesmo, com consciência e confiança.

Naquela época, era difícil encontrar produtos naturais de qualidade em nossa cidade. Foi justamente essa carência que nos impulsionou a criar um espaço onde cada pessoa pudesse se sentir acolhida, tirar dúvidas, aprender e cuidar de si de forma natural e segura. Assim, começamos com uma pequena seleção de produtos — escolhidos com muito cuidado e responsabilidade.

Com o tempo, fomos conquistando a confiança dos nossos clientes, criando laços verdadeiros e nos tornando parte da rotina de quem busca uma vida mais saudável. Cada conversa, cada indicação, cada história compartilhada nos ajudou a crescer e a moldar a identidade da loja que somos hoje.

Hoje, temos orgulho do caminho percorrido. Crescemos, nos atualizamos, trouxemos novidades, mas sem nunca perder a essência: um atendimento humano, atencioso e comprometido com o bem-estar. Mais do que vender produtos, buscamos orientar, escutar e oferecer sempre o melhor do universo natural com carinho, ética e respeito.

Seguimos com o coração cheio de gratidão por todos que fizeram (e fazem) parte dessa caminhada. Que venham os próximos anos — continuaremos firmes em nossa missão de oferecer saúde, bem-estar e alma natural, todos os dias.</p>

        <div class="carousel">
            <button class="carousel-button prev">❮</button>
            <div class="carousel-track">
                <img src="imgs/img2.png" alt="Frente da loja">
                <img src="imgs/img3.png" alt="Produto">
                <img src="imgs/img4.png" alt="Produto">
                <img src="imgs/img5.png" alt="Produto">
                <img src="imgs/img6.png" alt="Produto">
                <img src="imgs/img7.png" alt="Produto">
                <img src="imgs/img8.png" alt="Produto">
                <img src="imgs/img9.png" alt="Produto">
                <img src="imgs/img10.png" alt="Produto">
            </div>
            <button class="carousel-button next">❯</button>
        </div>
    </div>
</section>

<section class="products">
    <h2>O que você encontra aqui</h2>
    <div class="about-content">
        <ul>
            <li>Alimentos a granel</li>
            <li>Ervas medicinais</li>
            <li>Suplementos esportivos</li>
            <li>Fitoterápicos e vitaminas</li>
            <li>Snacks saudáveis</li>
            <li>Alimentos veganos,sem glúten,lactose e açúcar.</li>
        </ul>
        <div class="map">
            <a href="https://www.google.com/maps/dir//R.+Quinze+de+Novembro,+568+-+Centro,+Itaqui+-+RS,+97650-000/@-29.1272097,-56.548939,17.5z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94545fdcad4f44c3:0xa95f5731021eb1a9!2m2!1d-56.5544611!2d-29.1238849?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
            <img src="imgs/mapa.png" alt="Mapa da localização">
            </a>
        </div>
    </div>
</section>

<footer>
    <div class="footer-text">
        <p>Extrato da Terra</p>
        <p>Produtos Naturais - Desde 2015</p>
    </div>
    <div class="footer-text">
        <h5>Redes Sociais</h5>
        <div class="social-icons">
            <a href="https://www.instagram.com/extratodaterra" target="_blank">
                <img src="imgs/instagram.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/extratodaterraprodutosnaturais/" target="_blank">
                <img src="imgs/facebook.png" alt="Facebook">
            </a>
        </div>
    </div>
</footer>

<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        const carouselTrack = document.querySelector('.carousel-track');
        const carouselImages = document.querySelectorAll('.carousel-track img');
        const prevButton = document.querySelector('.carousel-button.prev');
        const nextButton = document.querySelector('.carousel-button.next');
        let currentIndex = 0;

        function getImageWidth() {
            return carouselImages[0].clientWidth;
        }

        function updateCarousel() {
            const imageWidth = getImageWidth();
            carouselTrack.style.transform = `translateX(${-currentIndex * imageWidth}px)`;
        }

        function goToPrev() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : carouselImages.length - 1;
            updateCarousel();
        }

        function goToNext() {
            currentIndex = (currentIndex < carouselImages.length - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        }

        // Eventos de clique
        prevButton.addEventListener('click', goToPrev);
        nextButton.addEventListener('click', goToNext);

        // Eventos de touch para melhor experiência mobile
        prevButton.addEventListener('touchend', function(e) {
            e.preventDefault();
            goToPrev();
        });

        nextButton.addEventListener('touchend', function(e) {
            e.preventDefault();
            goToNext();
        });

        // Listener para redimensionamento
        window.addEventListener('resize', function() {
            updateCarousel();
        });

        // Aguarda o carregamento das imagens antes de inicializar
        let imagesLoaded = 0;
        carouselImages.forEach(img => {
            if (img.complete) {
                imagesLoaded++;
            } else {
                img.addEventListener('load', () => {
                    imagesLoaded++;
                    if (imagesLoaded === carouselImages.length) {
                        updateCarousel();
                    }
                });
            }
        });

        // Se todas as imagens já estão carregadas
        if (imagesLoaded === carouselImages.length) {
            updateCarousel();
        }
    });
</script>

</body>
</html>