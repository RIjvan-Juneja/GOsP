<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="faq.css">

  <?php include "include/importhead.php"; ?>


</head>

<body>
  <!-- <header> -->
  <?php include "componants/header/header.php"; ?>
    <!-- </header> -->

  <div class="containerFluid">
    <h2>Frequently Asked Questions(FAQs)</h2>
    <div class="accordion">
      <div class="icon"></div>
      <h5>What is Lorem Ipsum?</h5>
    </div>
    <div class="panel">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only
        five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.
      </p>
    </div>

    <div class="accordion">
      <div class="icon"></div>
      <h5>Why do we use it?</h5>
    </div>
    <div class="panel">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only
        five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.
      </p>
    </div>

    <div class="accordion">
      <div class="icon"></div>
      <h5>Where does it come from?</h5>
    </div>
    <div class="panel">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only
        five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.
      </p>
    </div>

    <div class="accordion">
      <div class="icon"></div>
      <h5>Why do we use it?</h5>
    </div>
    <div class="panel">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only
        five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.
      </p>
    </div>
  </div>

   <!-- <footer> -->
   <?php include "componants/footer/footer.php"; ?>
    <!-- </footer> -->

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    var len = acc.length;
    for (i = 0; i < len; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }

  </script>
</body>

</html>