@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form method="post" action="{{route('senMessage')}}" enctype="multipart/form-data">
    @csrf
    <!-- Name input-->
    <div class="form-floating mb-3">
        <input class="form-control"
               id="name" type="text"
               name="fullname"
               placeholder="Enter your name..."
               required/>
        <label for="name">
            Full name
        </label>
        <div class="invalid-feedback"
             data-sb-feedback="name:required">
            A name is required.
        </div>
    </div>
    <!-- Email address input-->
    <div class="form-floating mb-3">
        <input class="form-control"
               id="email"
               type="email"
               name="email"
               placeholder="name@example.com"
               required/>
        <label for="email">
            Email address
        </label>
        <div class="invalid-feedback"
             data-sb-feedback="email:required">
            An email is required.
        </div>
        <div class="invalid-feedback"
             data-sb-feedback="email:email">
            Email is not valid.
        </div>
    </div>
    <!-- Phone number input-->
    <div class="form-floating mb-3">
        <input class="form-control"
               id="phone"
               type="tel"
               name="phone"
               placeholder="(123) 456-7890"
               required/>
        <label for="phone">
            Phone number
        </label>
        <div class="invalid-feedback"
             data-sb-feedback="phone:required">
            A phone number is required.
        </div>
    </div>
    <!-- Phone number input-->
    <div class="form-floating mb-3">
        <input class="form-control"
               id="subject"
               type="text"
               name="subject"
               placeholder="subject"
               required/>
        <label for="subject">
            Subject
        </label>
        <div class="invalid-feedback"
             data-sb-feedback="phone:required">
            subject is required.
        </div>
    </div>

    <!-- Message input-->
    <div class="form-floating mb-3">
        <textarea class="form-control"
                  id="message"
                  type="text"
                  placeholder="Enter your message here..."
                  style="height: 10rem"
                  name="message"
                  required></textarea>
        <label for="message">
            Message
        </label>
        <div class="invalid-feedback"
             data-sb-feedback="message:required">
            A message is required.
        </div>
    </div>
    <!-- Submit success message-->

    <div class="d-none"
         id="submitSuccessMessage">
        <div class="text-center mb-3">
            <div class="fw-bolder">
                Form submission successful!
            </div>
        </div>
    </div>
    <!-- Submit error message-->

    <div class="d-none"
         id="submitErrorMessage">
        <div class="text-center text-danger mb-3">
            Error sending message!
        </div>
    </div>
    <!-- Submit Button-->
    <div class="d-grid">
        @include('frontend.cihancalli.widgets.buttons.submit')
    </div>
</form>
