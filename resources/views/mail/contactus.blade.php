<x-layout>
    <header class="container-fluid p-0">
      <div class="row contactHerosec">
        <div class="col-12">

        </div>
      </div>
    </header>
    <main>
        <section class="container ">
          <div class="row mt-3 ">
             <div class="col-12">
                <form action="{{ route('send mail')}}" method="POST">

                    @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"
                            name="username" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email"
                            name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message"
                            name="content" rows="5"
                            placeholder="Enter your message" required></textarea>
                        </div>

                         <button type="submit" class="btn">
                            Send Message
                         </button>

                </form>
             </div>
          </div>
        </section>
    </main>
</x-layout>