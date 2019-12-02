<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
  @if (session('success'))
      <div class="uk-alert-success" uk-alert>
          <a class="uk-alert-close" uk-close></a>
          <p>{{ session('success') }}</p>
      </div>
  @endif
  <form action="{{ secure_url('/send/success') }}" method="post" accept-charset="utf-8">
  {{ csrf_field() }}

    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
      <input name="username" type="text" class="form-control" placeholder="Enter your name" id="name">
      @if ($errors->has('username'))
          <span class="help-block text-lowercase text-small text-danger">
              <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('username') }}</small></strong>
          </span>
      @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <input name="email" type="text" class="form-control" placeholder="Enter your email address" id="email">
      @if ($errors->has('email'))
          <span class="help-block text-lowercase text-small text-danger">
              <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('email') }}</small></strong>
          </span>
      @endif
    </div>

    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
      <input name="subject" type="text" class="form-control" placeholder="Your subject" id="subject">
      @if ($errors->has('subject'))
          <span class="help-block text-lowercase text-small text-danger">
              <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('subject') }}</small></strong>
          </span>
      @endif
    </div>

    <div class="form-group{{ $errors->has('msg') ? ' has-error' : '' }}">
      <textarea name="msg" class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
      @if ($errors->has('msg'))
          <span class="help-block text-lowercase text-small text-danger">
              <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('msg') }}</small></strong>
          </span>
      @endif
    </div>


    <div class="form-group">
      <button class="btn-contact btn btn-info font-weight-light" type="submit" data-loading-text="<i class='far fa-circle-o-notch fa-spin'></i> Processing"><i class="far fa-paper-plane mr-1"></i>submit</button>
    </div>

  </form>
</div>

<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

    <ul class="contact-list">

          <li class="list-item">
            <i class="fa fa-map-marker fa-1x">
              <span class="contact-text place font-weight-light">A4 Rue Hassan 2 Hay Ennahda, TATA.</span>
            </i>
          </li>

          <li class="list-item">
            <i class="fa fa-phone fa-1x">
              <span class="contact-text phone font-weight-light">
                +(212) 528 802 207 | +(212) 766 955 007 | +(212) 628 635 255
              </span>
            </i>
          </li>

          <li class="list-item">
            <i class="fa fa-envelope fa-1x">
              <span class="contact-text gmail font-weight-light">
                <a href="mailto:Boulakhbarabdessadek@gmail.com?subject=feedback" title="Send us an email">Boulakhbarabdessadek@gmail.com</a>
              </span>
            </i>
          </li>

        </ul>
</div>
