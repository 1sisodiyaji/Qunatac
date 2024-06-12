<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managed IT Services</title>
    <?php include_once '../component/link.php' ; ?>
    <style>
         section {
            padding: 2rem;
            margin: 1rem auto;
            max-width: 1100px;
            background: #071a30;
            box-shadow: 0 0 10px rgba(3, 3, 0, 0.5);
            border-radius: 10;
            opacity: 0;
            color: white;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        section.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
<?php include_once '../component/Header.php' ; ?>
<header>
    <h1 class="text-center my-3">Web Development</h1>
</header>

<section id="why-choose">
    <h2>Why Choose a Managed IT Services Team Over an Internal IT Person?</h2>
    <p>Imagine having an entire team of IT experts at your disposal for a fraction of the cost of a single internal IT employee. With our managed IT services, you can:</p>
    <ul>
        <li>Enhance Your Business Growth: Let us handle your technology needs while you focus on scaling your business.</li>
        <li>Boost Productivity and Efficiency: Utilize state-of-the-art IT solutions designed to maximize your productivity.</li>
        <li>Simplify Budgeting: Enjoy a flat monthly rate that covers all your IT needs, eliminating unexpected expenses.</li>
        <li>Ensure Security: Protect your business and data with our comprehensive security measures.</li>
    </ul>
</section>

<section id="customized-services">
    <h2>Customized IT Services for Your Unique Business Needs</h2>
    <p>We understand that no two businesses are alike. That's why we offer tailored IT service packages to suit any size or budget.</p>
</section>

<section id="predictable-costs">
    <h2>Predictable Costs Around the Clock</h2>
    <p>Say goodbye to surprise costs. Our flat-rate fee structure ensures that even if your network is down or a server fails, you won’t be charged extra.</p>
</section>

<section id="productivity">
    <h2>Keep Your Team Productive</h2>
    <p>Our managed services include 24/7 monitoring of your critical infrastructure, computers, and network servers to keep your team working seamlessly.</p>
</section>

<section id="availability">
    <h2>Always Ready to Assist</h2>
    <p>What sets our managed services apart is our unwavering availability. Our team is here to help you, no matter the time or holiday.</p>
</section>

<section id="core-business">
    <h2>Focus on Your Core Business</h2>
    <p>Are constant IT issues distracting you from your main business goals? Let us take the reins of your technology management so you can concentrate on what truly matters.</p>
</section>

<section id="cutting-edge">
    <h2>Cutting-Edge Tools for Optimal Performance</h2>
    <p>We provide advanced tools and technologies to enhance your performance and streamline your operations.</p>
</section>

<section id="services">
    <h2>Our IT Solutions</h2>
    <ul>
        <li>Technical Implementation: Expertly integrate new technologies into your existing setup.</li>
        <li>IT Helpdesk Support: Round-the-clock assistance for any IT-related issues.</li>
        <li>Managed IT Services: Comprehensive management of all your IT needs.</li>
        <li>IT Consulting: Strategic advice to help you make informed technology decisions.</li>
        <li>Network Support: Reliable support to ensure your network runs smoothly.</li>
        <li>Field Tech Support: On-site technical assistance when you need it most.</li>
    </ul>
</section>

<section id="testimonials">
    <h2>What Our Clients Say</h2>
    <p>Our clients consistently praise our managed IT services for their reliability, affordability, and the peace of mind they bring. Let us show you how we can make a difference in your business too.</p>
</section>

<section id="cta">
    <h2>Schedule a Free Consultation Today</h2>
    <p>Discover how our managed IT services can benefit your business. Contact us to schedule your free consultation and take the first step towards optimized technology management.</p>
    <a href="#" class="btn">Schedule Now</a>
</section>

<?php include_once '../component/Footer.php' ; ?>
<script>
    // Animation on scroll
    const sections = document.querySelectorAll('section');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        observer.observe(section);
    });
</script>

</body>
</html>
