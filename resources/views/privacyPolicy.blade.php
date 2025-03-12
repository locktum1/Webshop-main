<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="privacyPolicy">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <div class="intro">
            <h1>Privacy policy</h1>
        </div>
        <main>
            <h2><span>1. Introduction</span>

                Welcome to Webshop! Your privacy is important to us. This Privacy Policy explains how we collect, use, and protect your personal information when you visit our website webshop.com.

                <span>2. Information We Collect</span>
                When you visit our webshop, we may collect the following types of information:

                Personal information (e.g., name, email, shipping address, phone number, payment details) when you place an order.

                Non-personal information (e.g., browser type, IP address, device information) for website analytics.

                <span>3. How We Use Your Information</span>

                We use the information we collect to:

                Process and fulfill your orders.

                Communicate with you about your orders and inquiries.

                Improve our website and customer experience.

                Comply with legal obligations.

                <span>4. Sharing Your Information</span>

                We do not sell or rent your personal data. However, we may share it with:

                Payment processors to complete transactions.

                Shipping providers to deliver your orders.

                Service providers who assist with website maintenance and analytics.

                Legal authorities if required by law.

                <span>5. Cookies and Tracking Technologies</span>

                We use cookies and similar technologies to enhance user experience, track website usage, and improve our services. You can adjust your cookie settings in your browser.

                <span>6. Data Security</span>

                We take reasonable security measures to protect your personal information. However, no method of transmission over the internet is 100% secure.

                <span>7. Your Rights</span>

                Depending on your location, you may have rights regarding your personal data, including access, correction, and deletion. Contact us at [your email] for requests.

                <span>8. Changes to This Policy</span>

                We may update this Privacy Policy from time to time. Any changes will be posted on this page with the updated effective date.

                <span>Contact Us</span>

                If you have any questions about this Privacy Policy, please contact us at:
                Webshop hello@webshop.com 123 Webshop Str.</h2>
        </main>
        <footer><h1>By Elliot :D</h1></footer>
    </div>
</body>
<script>
    window.addEventListener('scroll', function() {
        const element = document.querySelector('.downArrow');
        const productSections = document.querySelector('.productSection')

        if (window.scrollY > 500) {
            element.classList.add('hidden')
            element.classList.remove('show')
        } else {
            element.classList.remove('hidden')
            element.classList.add('show')
        }
    })
</script>
</html>


