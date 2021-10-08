<?php include 'header.php' ?>

<div class="w-100 h-100 bg-yellowalt p-4">
    <div class="bg-white m-4 p-4 rounded-alt">
        <div class="text-center my-4 py-4">
            <h1><strong>Send<span class="text-yellow"> Article</span></strong></h1>
        </div>

        <div class="m-auto p-auto">
            <div class="row px-5 py-3">
                <div class="col-md-3 col-sm-12">
                    <h4 class="">Name</h4>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="name" placeholder="Input your name" class="form-text border-0 border-bottom w-100" id="disabledTextInput" aria-describedby="nameHelp">
                </div>
            </div>

            <div class="row px-5 py-3">
                <div class="col-md-3 col-sm-12">
                    <h4>Email</h4>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="email" placeholder="Input your email" class="form-text border-0 border-bottom w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row px-5 py-3">
                <div class="col-md-3 col-sm-12">
                    <h4>Title</h4>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="title" placeholder="Input article's title" class="form-text border-0 border-bottom w-100" id="title" aria-describedby="titleHelp">
                </div>
            </div>

            <div class="row px-5 py-3">
                <div class="col-md-3 col-sm-12">
                    <h4>Import Articles</h4>
                </div>
                <div class="col-md-2 col-sm-12">
                    <button type="submit" class="border-0 w-100">Import Article (.pdf)</button>
                    <div class="col-2 my-4 py-3">
                        <button class="bg-darkalt text-yellow rounded-alt px-5 py-2"><strong>SEND</strong></button>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center mt-5">For any other inquiries please contact <a class="text-decoration-none" href="#">support@codingcollective.com</a></p>
    </div>
</div>

<?php include 'footer.php' ?>