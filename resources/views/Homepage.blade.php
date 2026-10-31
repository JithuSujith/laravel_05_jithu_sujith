<x-layout>
    <header class="heroSection">
        <div class="container  text-center text-white py-5 flex-column d-flex justify-content-center align-items-center">
            <h1>Unfinished Hope</h1>
            <p>Every hope deserves a future.</p>
        </div>
    </header>

    <main class="container-fluid p-0 ">
        <section class="row introdetail d-flex justify-content-center">
            
        <article class="col-12 col-md-12 text-center">
        <h1>1 JOHN 3:18</h1>
        <p class="fs-3 fw-1 fst-italic">"Let us not love with words or speech but with actions and in truth."</p>
        </article>
        </section>

        <section class="container">
         <div class="row d-flex justify-content-center align-items-center mt-5 ">
         <article class="col-12 col-md-6 order-2">
            <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($images as $item)
                        <div class="carousel-item {{$loop->first?"active":""}}">
                           <img src="{{ asset($item['image']) }}" class="d-block w-100" alt="image">
                        </div>
                        @endforeach   
                    </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
         </article>

         <article class="col-12 col-md-6 order-1">
            <h2 class="heading">WHO ARE WE</h2>
             <h3>Our Mission: Turning Hope into Action</h3>
             <p>At Unfinished Hope, we believe that everyone deserves the opportunity to live a safe, dignified and fulfilling life, regardless of their circumstances. We are a non-profit organization dedicated to supporting people and families facing difficult situations, offering them hope, opportunities and the assistance they need to build a better future. Our mission is to help people experiencing homelessness by providing support and connecting them with essential resources, so that no one has to face the challenges of life alone. We also believe that every child deserves access to a proper education, regardless of their family's financial situation. Education is one of the most powerful tools for creating change, and we want to help children access the learning opportunities they need to grow, discover their potential and achieve their dreams. Furthermore, we are committed to supporting families struggling financially by offering assistance with essential expenses and everyday needs. Through the generosity of our supporters and the contributions we receive, we aim to provide meaningful help to those who need it most. We believe that even the smallest act of kindness can make a significant difference in someone's life. Our organization is built on compassion, solidarity and the belief that everyone deserves a chance to start again. Together, we can create a community where people support one another, children can dream without limits, and families can look forward to a brighter tomorrow. Because at Unfinished Hope, we don't just believe in hope — we believe in making it possible.</p>
         </article>
         </div>
        </section>

        <section class=" container contactSection text-center">
    <div class="container">
        <h2>Be Part of the Change</h2>
        <h3>Together, we can make a difference.</h3>

        <p>
            Are you interested in helping others and bringing hope
            to people who need it most? Join us in making a positive
            impact. Every helping hand, every kind gesture and
            every contribution matters.
        </p>

        <a href="{{route('contact us')}}" class="btn btn-light contactBtn">
            Contact Us
        </a>
    </div>
</section>
    </main>
</x-layout>