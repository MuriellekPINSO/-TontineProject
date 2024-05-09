@extends('layout.main')
@section('content')
<section>
    <div class="container cont-section">
        <div class="row">
            <div class="col-md-6 py-5  cont-section1">
                <h3>Nos contact</h3>
                <p class="text-muted primary-color">Contactez-nous. Ça nous fera plaisir de répondre à vos préoccupations.</p>
                <p>Notre e-mail</p><br>
                +229 59350935
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                
                        <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop