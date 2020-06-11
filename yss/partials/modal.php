<button class="btn btn--primary" aria-controls="modal-form">Show form</button>

<div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-form">
  <div class="modal__content width-100% max-width-xs padding-md bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-form-title" aria-describedby="modal-form-description">
    <div class="text-component margin-bottom-md">
      <h3 id="modal-form-title">Join our Newsletter</h3>
      <p id="modal-form-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit asperiores molestiae ex.</p>
    </div>

    <form class="margin-bottom-sm">
      <div class="flex flex-column flex-row@xs gap-xxxs">
        <input aria-label="Email" class="form-control flex-grow" type="email" placeholder="Email">
        <button class="btn btn--primary">Subscribe</button>
      </div>
    </form>

    <div class="text-component">
      <p class="text-xs color-contrast-medium">Lorem ipsum dolor sit, amet <a href="#0" class="color-contrast-high">consectetur adipisicing</a> elit. Nisi molestias hic voluptatibus.</p>
    </div>
  </div>

  <button class="reset modal__close-btn modal__close-btn--outer  js-modal__close js-tab-focus">
    <svg class="icon icon--sm" viewBox="0 0 24 24">
      <title>Close modal window</title>
      <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
        <line x1="3" y1="3" x2="21" y2="21" />
        <line x1="21" y1="3" x2="3" y2="21" />
      </g>
    </svg>
  </button>
</div>