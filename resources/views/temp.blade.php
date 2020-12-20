<div id="container_detail">
    <brand-detail></brand-detail>
</div>
<template id="brand-detail-template">
    <div class="content">
        <h1> @{{ d . brand_name }} </h1>
        <img :src="d.image" class="">
    </div>
    @{{ d . description }} // HERE I AM GETTING HTML TAGS WITH DATA.
</template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('forala/css/froala_editor.pkgd.min.css') }}">
</head>

<body>

    <textarea id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>

    <!-- Include all Editor plugins JS files. -->
    <script type="text/javascript" src="{{ asset('forala/js/froala_editor.pkgd.min.js') }}"></script>

    <!-- Include PDF export JS lib. -->
    <script type="text/javascript" src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js">
    </script>

    <script>
        new FroalaEditor('textarea#froala-editor', {
            documentReady: true
        })

    </script>
</body>

</html>


<section class="events-area">
    <div class="container">
        <div class="sec-title">
            <div class="big-title">
                <h2 class="text-center">Upcoming Exibitions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="" style="display:block">
                    <carousel>
                        <slide v-for="exibition in exibitions" :key="exibition.id">
                            <div class="single-event-box" style="margin-right:20px">
                                <div class="img-holder">
                                    <div class="inner">
                                        <img src="/front-asset/images/events/event-v1-1.jpg" alt="Awesome Image" />
                                        <div class="overlay-style-one bg2"></div>
                                    </div>
                                    <!-- <div class="date-box">
                      <div class="left">30</div>
                      <div class="right">
                        <h6>November</h6>
                        <h3>SATURDAY</h3>
                      </div>
                    </div> -->
                                </div>
                                <div class="title-holder" style="margin-top:0">
                                    <div class="inner">
                                        <span>{{ exibition . name }}</span>
                                        <h3>
                                            <a href="#">{{ exibition . artist . name }}</a><i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </h3>
                                    </div>
                                    <!-- <div class="bottom">
                      <div class="text">
                        November 30, 2019 - November 28, 2020
                      </div>
                      <div class="button">
                        <a href="#">Find More</a>
                      </div>
                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="text-holder">
                  <div class="post-date">
                    <span>January 12, 2019</span>
                  </div>
                  <h3 class="blog-title">
                    <a href="blog-single.html"
                      >Scenes from Stepan Hawkin’s World</a
                    >
                  </h3>
                </div> -->
                        </slide>
                    </carousel>
                </div>
            </div>
        </div>
    </div>
</section>


await axios
.post("/api/client/store", this.form)
.then(response => {
this.form.name = "";
this.form.phone = "";
this.form.email = "";
this.form.address = "";
swal("Your information is submitted successfully.Thank you");
})
.catch(() => {});
