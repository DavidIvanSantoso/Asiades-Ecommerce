@extends('app')

@section('title', 'Asiades E-Commerce')

@section('content')

<div>
    <section class="bg-amber-600 text-white text-center py-16 rounded-lg mb-12 shadow-md">
    <h2 class="text-4xl font-bold mb-2">Contact Us</h2>
    <p class="text-lg">We’d love to hear from you! Get in touch with us below.</p>
  </section>

  <!-- Contact Section -->
  <section class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-10">
    
    <!-- Contact Info -->
    <div>
      <h3 class="text-2xl font-semibold mb-4">Get in Touch</h3>
      <p class="text-gray-600 mb-6">
        Have a question, feedback, or issue with your order?  
        Our team is ready to assist you!
      </p>

      <ul class="space-y-4 text-gray-700">
        <li class="flex items-center gap-3">
          <span class="text-green-600 text-xl">📍</span>
          <span>123 Green Street, Jakarta, Indonesia</span>
        </li>
        <li class="flex items-center gap-3">
          <span class="text-green-600 text-xl">📧</span>
          <span>support@asiadesfurniture.com</span>
        </li>
        <li class="flex items-center gap-3">
          <span class="text-green-600 text-xl">📞</span>
          <span>+62 812-3456-7890</span>
        </li>
        <li class="flex items-center gap-3">
          <span class="text-green-600 text-xl">⏰</span>
          <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
        </li>
      </ul>

      {{-- map --}}
      <div class="mt-8 rounded-xl overflow-hidden shadow-md">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0000000000005!2d110.40000000000002!3d-7.800000000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a579d2b000000%3A0x000000000000000!2sJakarta!5e0!3m2!1sen!2sid!4v123456789"
          width="100%" height="250" style="border:0;" allowfullscreen=""
          loading="lazy">
        </iframe>
      </div>
    </div>

    {{-- form --}}
    <div class="bg-white p-8 shadow-lg rounded-xl">
      <h3 class="text-2xl font-semibold mb-6">Send Us a Message</h3>
      
      <form id="contactForm" class="space-y-5">
        <div>
          <label class="block mb-1 text-gray-600 font-medium">Full Name</label>
          <input type="text" name="name" required
            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-300 outline-none">
        </div>

        <div>
          <label class="block mb-1 text-gray-600 font-medium">Email</label>
          <input type="email" name="email" required
            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-300 outline-none">
        </div>

        <div>
          <label class="block mb-1 text-gray-600 font-medium">Message</label>
          <textarea name="message" rows="5" required
            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-300 outline-none"></textarea>
        </div>

        <button type="submit"
          class="bg-amber-600 text-white px-6 py-2 rounded-lg hover:bg-amber-700 transition">
          Send Message
        </button>
      </form>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for reaching out to us! We will get back to you shortly.');
    this.reset();
  });
</script>
@endpush
