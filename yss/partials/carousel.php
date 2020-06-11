<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="carousel flex flex-column js-carousel" data-drag="on">
  <p class="sr-only">Carousel items</p>

  <div class="carousel__wrapper order-2 overflow-hidden">
    <ol class="carousel__list">
      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">1</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">2</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">3</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">4</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">5</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">6</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">7</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">8</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">9</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">10</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">11</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">12</div>
      </li>
    </ol>
  </div>

  <nav class="margin-bottom-xs order-1 no-js:is-hidden">
    <ul class="flex gap-xxxs justify-end">
      <li>
        <button class="reset carousel__control carousel__control--prev js-carousel__control js-tab-focus">
          <svg class="icon" viewBox="0 0 20 20">
            <title>Show previous items</title>
            <polyline points="13 18 5 10 13 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
          </svg>
        </button>
      </li>

      <li>
        <button class="reset carousel__control carousel__control--next js-carousel__control js-tab-focus">
          <svg class="icon" viewBox="0 0 20 20">
            <title>Show next items</title>
            <polyline points="7 18 15 10 7 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
          </svg>
        </button>
      </li>
    </ul>
  </nav>

</div>
</body>
</html>



