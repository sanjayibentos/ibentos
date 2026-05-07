<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>

<body style="margin:0; font-family:Arial;">

    <!-- Navbar -->
    <div style="display:flex; justify-content:space-between; padding:20px 60px; background:#111; color:white;">
        <h2>MyBrand</h2>
        <div>
            <a href="#home" style="color:white; margin-right:20px;">Home</a>
            <a href="#features" style="color:white; margin-right:20px;">Features</a>
            <a href="#contact" style="color:white;">Contact</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div id="home" style="
        height:90vh;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        text-align:center;
        color:white;
        background:linear-gradient(135deg, #667eea, #764ba2);
    ">
        <h1 style="font-size:60px;">Build Modern Websites 🚀</h1>
        <p style="margin:20px; font-size:18px;">Fast • Secure • Easy with Laravel</p>

        <a href="#features">
            <button style="
                padding:12px 30px;
                border:none;
                background:white;
                color:#333;
                font-size:16px;
                border-radius:25px;
                cursor:pointer;
            ">
                Explore
            </button>
        </a>
    </div>

    <!-- Features -->
    <div id="features" style="padding:80px; text-align:center; background:#f4f4f4;">
        <h2>Our Features</h2>

        <div style="display:flex; justify-content:space-around; margin-top:40px;">
            
            <div style="width:30%; background:white; padding:20px; border-radius:10px;">
                <h3>⚡ Fast</h3>
                <p>Lightning speed performance</p>
            </div>

            <div style="width:30%; background:white; padding:20px; border-radius:10px;">
                <h3>🔒 Secure</h3>
                <p>Top level security system</p>
            </div>

            <div style="width:30%; background:white; padding:20px; border-radius:10px;">
                <h3>💡 Easy</h3>
                <p>Beginner friendly structure</p>
            </div>

        </div>
    </div>

    <!-- Contact -->
    <div id="contact" style="padding:80px; text-align:center;">
        <h2>Contact Us</h2>

        <form method="POST" action="/contact-submit">
            @csrf

            <input type="text" name="name" placeholder="Name" style="padding:10px; width:250px;"><br><br>
            <input type="email" name="email" placeholder="Email" style="padding:10px; width:250px;"><br><br>
            <textarea name="message" placeholder="Message" style="padding:10px; width:250px;"></textarea><br><br>

            <button style="padding:10px 20px; background:#667eea; color:white; border:none;">
                Send Message
            </button>
        </form>
    </div>

    <!-- Footer -->
    <div style="background:#111; color:white; text-align:center; padding:20px;">
        <p>© 2026 MyBrand | All Rights Reserved</p>
    </div>

</body>
</html>