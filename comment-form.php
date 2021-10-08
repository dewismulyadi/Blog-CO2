<?php include 'header.php' ?>

<div class="w-100 h-100 bg-yellowalt p-4">
    <div class="bg-white m-4 p-4 rounded-alt">
        <div class="text-center my-4 py-4">
            <h1>Send<span class="text-yellow"> Comment</span></h1>
        </div>
        <div class="m-4 p-4">
            <div class="row px-4 py-3">
                <div class="col-3">
                    <p>Name</p>
                </div>
                <div class="row col-9">
                    <input type="name" placeholder="Input your name" class="form-text border-0 border-bottom w-100" id="disabledTextInput" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row px-4 py-3">
                <div class="col-3">
                    <p>Email</p>
                </div>
                <div class="col-9">
                    <input type="email" placeholder="Input your email" class="border-0 border-bottom w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row px-4 py-3">
                <div class="col-3">
                    <p>Comment</p>
                </div>
                <div class="col-9">
                    <input type="comment" placeholder="Input your comment" class="border-0 border-bottom w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div class="my-4 py-3">
                        <button class="bg-darkalt text-yellow rounded-alt px-4">SEND</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include 'footer.php' ?>