<?php $title = 'BDEddie_Site_AvailableProperties'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="front page page-available-properties">
<div class="outer-wrapper">
<?php include 'tpl/layout/header.inc'; ?>
<div class="content-wrapper site-container">

<div class="b-image-page-header">
  <h2>available properties</h2>
</div>

<div class="b-filter-view width-padding">
  <div class="view-wrapper">

    <div class="form form-properties-view-btns">
      <form action="#" method="post">

        <div class="field-list-view field-item">
          <div class="form-item form-type-radio">

            <input id="list-view" type="radio" name="radio" checked hidden/>
            <label for="list-view">list view</label>

          </div>
        </div>

        <div class="field-map-view field-item">
          <div class="form-item form-type-radio">

            <input id="map-view" type="radio" name="radio" hidden/>
            <label for="map-view">map view</label>

          </div>
        </div>

      </form>

    </div>
  </div>

  <div class="filter-wrapper">

    <div class="form form-filter-listing-links">
      <form action="#" method="post">

        <fieldset>
          <legend>filter listing by:</legend>

        <div class="field-filter-all field-item">
          <div class="form-item form-type-radio">

            <input id="filter-all" type="radio" name="radio" checked hidden/>
            <label for="filter-all">all</label>

          </div>
        </div>

        <div class="field-filter-retail field-item">
          <div class="form-item form-type-radio">

            <input id="filter-retail" type="radio" name="radio" hidden/>
            <label for="filter-retail">retail</label>

          </div>
        </div>

        <div class="field-filter-office field-item">
          <div class="form-item form-type-radio">

            <input id="filter-office" type="radio" name="radio" hidden/>
            <label for="filter-office">office</label>

          </div>
        </div>

        <div class="field-filter-residential field-item">
          <div class="form-item form-type-radio">

            <input id="filter-residential" type="radio" name="radio" hidden/>
            <label for="filter-residential">residential</label>

          </div>
        </div>
        </fieldset>

      </form>

    </div>

  </div>

</div>


<div class="b-links width-padding">
  <div class="links">
    <a href="#">
      <h3>work</h3>
      <img src="theme/images/tmp/link-work.jpg" alt="1"/>
    </a>
  </div>
  <div class="links">
    <a href="#">
      <h3>shop</h3>
      <img src="theme/images/tmp/link-shop.jpg" alt="2"/>
    </a>
  </div>
  <div class="links">
    <a href="#">
      <h3>live</h3>
      <img src="theme/images/tmp/link-live.jpg" alt="3"/>
    </a>
  </div>
</div>

<div class="b-about-us width-padding">
  <div class="col col-1">
    <h2>about us.</h2>
  </div>
  <div class="col col-2">
    <p>What began over 100 years ago as a grocery and feed store, is now a real estate concern with a
      portfolio that includes retail strip centers, fast food restaurants, convenience stores, office buildings,
      and nearly 1,000 acres of land planned for future multi-use developments.
    </p>
  </div>
  <div class="col col-3">
    <p>One of our recent developments is Kelley Pointe, in Edmond, Oklahoma.
      A combination of office, residential and retail uses is being developed for community-minded business
      people.
      Read more about Kelley Pointe and our premier office and retail space for lease in Edmond.
    </p>
  </div>

</div>

<div class="b-team width-padding">

  <div class="photo-description">
    <div class="left-part">
      <img src="theme/images/tmp/portrait-1.jpg" alt="p1"/>

      <h3>Terry McGuire</h3>

      <p>Leasing Director</p>

      <p>Terry has been with B.D. Eddie Enterprises for 16 years and has 20 years of experience in real estate
        appraisal, management, leasing and development. Terry can help with office and retail space for lease in
        Edmond and Oklahoma City, in addition to our commercial land available for development.
      </p>
    </div>
    <div class="right-part">
      <img src="theme/images/tmp/portrait-2.jpg" alt="p1"/>

      <h3>Clay T. Farha</h3>

      <p>President</p>

      <p>Clay has been with B.D. Eddie Enterprises for 30 years and has earned a Certified Commercial Investment
        Manager (CCIM) real estate designation.
      </p>
    </div>
  </div>

  <div class="contact-link btn-wrapper">
    <a class="btn" href="#">
      contact
    </a>
  </div>
</div>


<div class="b-clients width-padding">

  <div class="clients-list-wrapper">
    <div class="left-part">
      <h3>RETAIL</h3>

      <div class="left-client-list-wrapper">

        <ul>
          <li>A&W Restaurants</li>

          <li>Barnes & Noble</li>

          <li>Big Sky Bread</li>

          <li>Church's Chicken</li>

          <li>Circle K</li>

          <li>City Bites</li>

          <li>Freddy's Frozen Custard</li>

          <li>KFC</li>

          <li>Long John Silver's</li>

          <li>Mobile Macsters</li>

          <li>Olive + Co</li>

          <li>Options 2 Design</li>

          <li>Pack N' Ship</li>

          <li>Paper N' More</li>

          <li>Perk Place Cafe</li>

          <li>Pole Position Raceway</li>

          <li>Prim</li>

          <li>ProCleaners</li>

          <li>Snow Pea</li>

          <li>Swiss Cleaners</li>

          <li>Tony Foss Flowers</li>
        </ul>

      </div>


    </div>
    <div class="right-part">
      <h3>OFFICE</h3>

      <ul>
        <li>American Eagle Title Co.</li>

        <li>Breast Imaging of Oklahoma</li>

        <li>The Cotton Law Firm</li>

        <li>Edward Jones</li>

        <li>EMSA</li>

        <li>Farmer's Insurance/Mike</li>

        <li>Gaddis Agency</li>

        <li>The Hays Group, Inc.</li>

        <li>Michael Bay and Associates</li>

        <li>Nick Massey Householder</li>

        <li>Group Financial</li>

        <li>Quinstreet/Surehits</li>
      </ul>

    </div>
  </div>
</div>


</div>
</div>
<?php include 'tpl/layout/footer.inc'; ?>
</body>
</html>