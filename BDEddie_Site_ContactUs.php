<?php $title = 'BDEddie_Site_ContactUs'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="front page page-contact-us">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">

    <div class="b-image-page-header">
      <h2>contact us</h2>
    </div>

    <div class="b-eddie-enterprises width-padding">
      <h2>B.D. EDDIE ENTERPRISES</h2>

      <div class="cols">
        <div class="col col-1">6801 N. Classen Blvd.,
          Suite A Oklahoma City, OK
          73116-7207
        </div>
        <div class="col col-2">PHONE:
          <a href="">405.843.5060</a>
          Fax: 405.848.2249
        </div>
        <div class="col col-3">
          <a href="#">VIEW ON MAP</a>
        </div>
      </div>
    </div>


    <div class="form-contact-wrapper">

      <div class="form form-contact width-padding">
        <form action="#" method="post">

          <fieldset>
            <legend>contact form</legend>

            <div class="field-name field-item">
              <div class="form-item form-type-text">
                <label><span class="form-required">*</span>Name:</label>
                <input type="text" class="form-text"/>
              </div>
            </div>

            <div class="field-email field-item">
              <div class="form-item form-type-text">
                <label><span class="form-required">*</span>Email:</label>
                <input type="text" class="form-text"/>
              </div>
            </div>

            <div class="field-phone field-item">
              <div class="form-item form-type-text">
                <label><span class="form-required">*</span>Phone:</label>
                <input type="text" class="form-text"/>
              </div>
            </div>

            <div class="field-fax field-item">
              <div class="form-item form-type-text">
                <label>Fax:</label>
                <input type="text" class="form-text"/>
              </div>
            </div>

            <div class="field-describes field-item">
              <div class="form-item form-type-select">
                <label><span class="form-required">*</span>
                  Which of the following best describes your need?
                </label>

                <div class="select">
                  <select class="form-select">
                    <option></option>
                    <option>Best of the best</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="btn-wrapper">
              <input class="btn" id="edit-submit" type="submit" name="sub" value="Submit">
            </div>

            <fieldset>

        </form>

      </div>
    </div>


  </div>
</div>
<?php include 'tpl/layout/footer.inc'; ?>
</body>
</html>