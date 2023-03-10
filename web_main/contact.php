<?php include 'menu.php' ?>
<div class="content1_contact">
  
	<h2>
	<a class="links3 l-makewatch" name="makewatch">Skontaktuj się z nami</a></h2>
</div>
<dl class="faq">
  <dt>
    <button type="button" aria-expanded="false" aria-controls="faq1_desc">Adres siedziby firmy 7onn</button>
  </dt>
  <dd>
    <div id="faq1_desc" class="desc">
      <b>7onn</b><br>
      ul. Powstańców Wielkopolskich 5<br>
      61-895 Poznań<br>
      Telefon: 123456789<br>

    </div>
  </dd>
  <dt>
    <button type="button" aria-expanded="false" aria-controls="faq2_desc">Dane firmy</button>
  </dt>
  <dd>
    <div id="faq2_desc" class="desc">
      KRS: 0000253234<br>
      NIP: 1234567890<br>
      REGON: 987654321<br>
      Kapitał zakładowy 100.000 zł w całości opłacony<br>
    </div>
  </dd>
  <dt>
    <button type="button" aria-expanded="false" aria-controls="faq3_desc">Informacje kontaktowe</button>
  </dt>
  <dd>
    <div id="faq3_desc" class="desc">
      sklep@7onn.com<br>
      biuro@7onn.com<br>
      +48 123 456 789<br>
    </div>
  </dd>
  <dt>
    <button type="button" aria-expanded="false" aria-controls="faq4_desc">Zamówienia i dostawa</button>
  </dt>
  <dd>
    <div id="faq4_desc" class="desc">
      Zamówienia relizowane są w ciągu 3 dni roboczych.<br>
      Korzystamy z firmy kurierskiej DPD, gdzie standordowo czas dostawy to 1 dzień roboczy.<br>
      Jeżeli nie otrzymałeś paczki po takim upływie czasu, należy się z nami skontaktować na adres e-mail:<br>
      zamowienia@7onn.com
    </div>
  </dd>
  <dt>
    <button type="button" aria-expanded="false" aria-controls="faq5_desc">Współpraca</button>
  </dt>
  <dd>
    <div id="faq5_desc" class="desc">
      Jeżeli jesteś zainteresowany współpracą z nami, prosimy o kontakt na adres e-mail:<br>
      wspolpraca@7onn.com

    </div>
  </dd>
</dl>

<?php include 'foot.php' ?>






<script>
  'use strict';

  class DisclosureButton {
    constructor(buttonNode) {
      this.buttonNode = buttonNode;
      this.controlledNode = false;

      var id = this.buttonNode.getAttribute('aria-controls');

      if (id) {
        this.controlledNode = document.getElementById(id);
      }

      this.buttonNode.setAttribute('aria-expanded', 'false');
      this.hideContent();

      this.buttonNode.addEventListener('click', this.onClick.bind(this));
      this.buttonNode.addEventListener('focus', this.onFocus.bind(this));
      this.buttonNode.addEventListener('blur', this.onBlur.bind(this));
    }

    showContent() {
      if (this.controlledNode) {
        this.controlledNode.style.display = 'block';
      }
    }

    hideContent() {
      if (this.controlledNode) {
        this.controlledNode.style.display = 'none';
      }
    }

    toggleExpand() {
      if (this.buttonNode.getAttribute('aria-expanded') === 'true') {
        this.buttonNode.setAttribute('aria-expanded', 'false');
        this.hideContent();
      } else {
        this.buttonNode.setAttribute('aria-expanded', 'true');
        this.showContent();
      }
    }



    onClick() {
      this.toggleExpand();
    }

    onFocus() {
      this.buttonNode.classList.add('focus');
    }

    onBlur() {
      this.buttonNode.classList.remove('focus');
    }
  }



  window.addEventListener(
    'load',
    function() {
      var buttons = document.querySelectorAll(
        'button[aria-expanded][aria-controls]'
      );

      for (var i = 0; i < buttons.length; i++) {
        new DisclosureButton(buttons[i]);
      }
    },
    false
  );
</script>


</html>