// JavaScript для модального окна

// Получаем модальное окно
var modal = document.getElementById('myModal');

// Получаем изображение и вставляем его внутри модального окна
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
var images = document.getElementsByClassName('gallery-img');

for (var i = 0; i < images.length; i++) {
    images[i].onclick = function(){
        modal.style.display = 'block';
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
}

// Получаем элемент <span>, который закрывает модальное окно
var span = document.getElementsByClassName('close')[0];

// Когда пользователь нажимает на <span> (x), закрыть модальное окно
span.onclick = function() {
    modal.style.display = 'none';
}
