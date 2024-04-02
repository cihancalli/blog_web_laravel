<!-- Favicon-->
<link rel="icon"
      type="image/x-icon"
      href="{{route('home')}}/frontend/person/assets/favicon.ico"/>
<link href="{{route('home')}}/backend/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom Google font-->
<link rel="preconnect"
      href="https://fonts.googleapis.com"/>
<link rel="preconnect"
      href="https://fonts.gstatic.com" crossorigin/>
<link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet"/>
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
      rel="stylesheet"/>
<!-- Core theme CSS (includes Bootstrap)-->
<link href="{{route('home')}}/frontend/person/css/styles.css"
      rel="stylesheet"/>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.7);
    }

    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 700px;
    }

    .close {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 28px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #aaa;
        text-decoration: none;
    }
</style>
