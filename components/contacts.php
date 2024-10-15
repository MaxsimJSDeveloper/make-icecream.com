<section
  id="booking"
  class="section-indentation"
  aria-labelledby="booking-heading"
>
  <div class="container">
    <h2 id="booking-heading" class="visually-hidden">Форма бронювання</h2>
    <div class="contact-wrap">
      <div class="contact-item">
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Адреса">
            <use href="./img/symbol-defs.svg#icon-city"></use>
          </svg>
          <span class="contact-text">
            Вул. Кам'янецька, 15, Хмельницький, 29000, Україна 
          </span>
        </div>
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Телефон">
            <use href="./img/symbol-defs.svg#icon-phone"></use>
          </svg>
          <span class="contact-text">+380 67 193 05 57</span>
        </div>
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Email">
            <use href="./img/symbol-defs.svg#icon-email"></use>
          </svg>
          <a
            class="contact-link"
            href="mailto:info@makeicecream.com"
            aria-label="Написати на email"
            >info@svichkymaysternya.com</a
          >
        </div>
        <div class="contact-box">
          <svg
            class="contact-icon"
            width="20"
            height="20"
            aria-label="Місцезнаходження"
          >
            <use href="./img/symbol-defs.svg#icon-map"></use>
          </svg>
          <a
            class="contact-link"
            href="https://www.google.com/maps?q=Хмельницький,+вул.+Кам'янецька,+15"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Відкрити на карті"
            >Перейти</a
          >
        </div>
        <img class="contact-img" src="./img/map.webp" alt="карта" width="200">
      </div>

        <?php include './components/form.php' ?>
    </div>
  </div>
</section>
