<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>স্মার্ট অটোমেশন - ওয়াটার পাম্প ও হোম অটোমেশন সলিউশন</title>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Hind Siliguri', sans-serif;
        }
        body {
            background-color: #0f172a;
            color: #f8fafc;
            line-height: 1.6;
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }
        /* Header / Navigation */
        header {
            background: rgba(15, 23, 42, 0.95);
            border-bottom: 1px solid #1e293b;
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 12px 0;
        }
        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-icon {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: #ffffff;
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);
        }
        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.2;
        }
        .logo-subtext {
            font-size: 13px;
            color: #38bdf8;
            font-weight: 500;
        }
        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .nav-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: color 0.3s;
        }
        .nav-links a:hover, .nav-links a.active {
            color: #38bdf8;
        }
        .call-btn {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            padding: 8px 18px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
        }
        .call-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.5);
        }

        /* Hero Section */
        .hero {
            padding: 70px 0 50px;
            text-align: center;
            background: radial-gradient(circle at top, #1e293b 0%, #0f172a 100%);
        }
        .badge {
            display: inline-block;
            background: rgba(56, 189, 248, 0.1);
            border: 1px solid rgba(56, 189, 248, 0.3);
            color: #38bdf8;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .hero h1 {
            font-size: 36px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 18px;
            line-height: 1.3;
        }
        .hero p {
            font-size: 17px;
            color: #94a3b8;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #10b981, #059669);
            color: #ffffff;
            padding: 13px 26px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 17px;
            box-shadow: 0 4px 20px rgba(16, 185, 129, 0.3);
            display: inline-block;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(16, 185, 129, 0.5);
        }

        /* Feature Grid */
        .grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        .card {
            background: #1e293b;
            border: 1px solid #334155;
            padding: 25px;
            border-radius: 16px;
            text-align: left;
            transition: all 0.3s ease;
        }
        .card:hover {
            border-color: #3b82f6;
            transform: translateY(-3px);
        }
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }
        .icon-red { background: rgba(239, 68, 68, 0.15); color: #f87171; }
        .icon-amber { background: rgba(245, 158, 11, 0.15); color: #fbbf24; }
        .icon-blue { background: rgba(59, 130, 246, 0.15); color: #60a5fa; }
        .icon-emerald { background: rgba(16, 185, 129, 0.15); color: #34d399; }

        .card h3 {
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 8px;
        }
        .card p {
            font-size: 14px;
            color: #94a3b8;
        }

        /* Form Box */
        .order-section {
            padding: 60px 0;
        }
        .form-box {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 20px;
            padding: 35px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        .form-title {
            text-align: center;
            margin-bottom: 25px;
        }
        .form-title h2 {
            font-size: 26px;
            color: #ffffff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 15px;
            color: #cbd5e1;
            font-weight: 600;
        }
        .form-control {
            width: 100%;
            padding: 12px 16px;
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 10px;
            color: #ffffff;
            font-size: 15px;
            outline: none;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .payment-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .payment-card {
            background: #0f172a;
            border: 1px solid #334155;
            padding: 12px 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .payment-card input[type="radio"] {
            accent-color: #2563eb;
            width: 18px;
            height: 18px;
        }
        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);
            transition: all 0.3s;
            margin-top: 10px;
        }
        .submit-btn:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
        }

        footer {
            background: #090d16;
            border-top: 1px solid #1e293b;
            padding: 35px 0;
            text-align: center;
            color: #64748b;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <div class="container nav-wrapper">
            <div class="logo-area">
                <div class="logo-icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div>
                    <div class="logo-text">স্মার্ট অটোমেশন</div>
                    <div class="logo-subtext">প্রোপ্রাইটর: ওয়াহিদুল ইসলাম হাফিজ</div>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="nav-links">
                <a href="/" class="active"><i class="fa-solid fa-droplet"></i> পাম্প অটোমেশন</a>
                <a href="/smart-home"><i class="fa-solid fa-house-signal"></i> ওয়াই-ফাই ডিভাইস</a>
                <a href="/laptops"><i class="fa-solid fa-laptop"></i> ল্যাপটপ শোরুম</a>
            </nav>

            <a href="tel:01712986360" class="call-btn">
                <i class="fa-solid fa-phone"></i>
                <span>০১৭১২-৯৮৬৩৬০</span>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="badge">
                <i class="fa-solid fa-microchip"></i> মাইক্রোকন্ট্রোলার ও ম্যাগনেটিক কনট্যাক্টর টেকনোলজি
            </div>
            <h1>পানি ওভারফ্লো হয়ে কারেন্ট ও পানির বিল অপচয় হচ্ছে?</h1>
            <p>আর নয় ম্যানুয়াল সুইচের ঝামেলা! ট্যাংক খালি হলে পাম্প একা একাই চালু হবে, আর পানি ভরলেই অটো বন্ধ! ৫-১০ তলা ভবন, মসজিদ কিংবা ভারী ইন্ডাস্ট্রি পাম্পের শতভাগ নির্ভরযোগ্য অটোমেশন সমাধান।</p>
            <a href="#order-form" class="btn-primary">
                <i class="fa-solid fa-cart-shopping"></i> অটোমেশন সার্ভিস বুক করুন
            </a>
        </div>
    </section>

    <!-- Features -->
    <section style="padding: 60px 0; background: #0f172a;">
        <div class="container">
            <h2 style="text-align: center; font-size: 28px; color: #ffffff; margin-bottom: 30px;">
                কেন আমাদের স্মার্ট পাম্প অটোমেশন ব্যবহার করবেন?
            </h2>
            <div class="grid-4">
                <div class="card">
                    <div class="card-icon icon-emerald"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>শতভাগ অটোমেটিক</h3>
                    <p>ট্যাংক খালি হওয়া ও পূর্ণ হওয়া স্বয়ংক্রিয়ভাবে ডিটেক্ট করে পানির পাম্প নিয়ন্ত্রণ করে।</p>
                </div>
                <div class="card">
                    <div class="card-icon icon-amber"><i class="fa-solid fa-bolt"></i></div>
                    <h3>বিদ্যুৎ বিল সাশ্রয়</h3>
                    <p>প্রয়োজনের অতিরিক্ত পাম্প না চলার কারণে প্রতি মাসে মোটা অঙ্কের বিদ্যুৎ বিল বাঁচে।</p>
                </div>
                <div class="card">
                    <div class="card-icon icon-red"><i class="fa-solid fa-fire-extinguisher"></i></div>
                    <h3>মোটর সেফটি প্রটেকশন</h3>
                    <p>ভোল্টেজ ফ্ল্যাকচুয়েশন ও ড্রায় রান প্রটেকশন থাকায় মোটরের কয়েল পুড়ে যাওয়ার কোনো ঝুঁকি নেই।</p>
                </div>
                <div class="card">
                    <div class="card-icon icon-blue"><i class="fa-solid fa-building-user"></i></div>
                    <h3>সকল বহুতল ভবনে উপযোগী</h3>
                    <p>১ থেকে ১০+ তলা বাসা-বাড়ি, মসজিদ, কারখানা ও ইন্ডাস্ট্রিতে ব্যবহারের জন্য পারফেক্ট।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form -->
    <section class="order-section" id="order-form">
        <div class="container">
            <div class="form-box">
                <div class="form-title">
                    <h2>পাম্প অটোমেশন বুকিং ফর্ম</h2>
                    <p style="color: #94a3b8; font-size: 14px; margin-top: 5px;">তথ্য জমা দিন, আমাদের ইঞ্জিনিয়ারিং টিম আপনার সাথে সরাসরি যোগাযোগ করবে</p>
                </div>

                @if(session('success'))
                    <div style="background: rgba(16, 185, 129, 0.2); border: 1px solid #10b981; color: #34d399; padding: 12px; border-radius: 10px; margin-bottom: 20px; text-align: center;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/order" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>আপনার নাম *</label>
                        <input type="text" name="name" required placeholder="আপনার নাম লিখুন" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>মোবাইল নম্বর *</label>
                        <input type="tel" name="phone" required placeholder="১১ ডিজিটের মোবাইল নম্বর" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>স্থাপনার ধরন *</label>
                        <select name="building_type" required class="form-control">
                            <option value="residential">৫-১০ তলা বাসা/বিল্ডিং</option>
                            <option value="mosque">মসজিদ / মাদ্রাসা</option>
                            <option value="factory">শিল্প কারখানা / ইন্ডাস্ট্রি</option>
                            <option value="other">অন্যান্য কমার্শিয়াল স্পেস</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>পূর্ণাঙ্গ ঠিকানা *</label>
                        <textarea name="address" required rows="3" placeholder="উপশহর, নিউ মার্কেট বা আপনার বিস্তারিত ঠিকানা" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>পেমেন্ট / বুকিং মেথড *</label>
                        <div class="payment-options">
                            <label class="payment-card">
                                <input type="radio" name="payment_method" value="cod" checked>
                                <span style="font-size: 14px; font-weight: 600;"><i class="fa-solid fa-hand-holding-dollar" style="color: #34d399;"></i> কাজ শেষে পেমেন্ট</span>
                            </label>
                            <label class="payment-card">
                                <input type="radio" name="payment_method" value="bkash">
                                <span style="font-size: 14px; font-weight: 600;"><i class="fa-solid fa-mobile-screen-button" style="color: #ec4899;"></i> বিকাশ (bKash)</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">
                        বুকিং কনফার্ম করুন <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <h3 style="color: #ffffff; font-size: 18px; margin-bottom: 5px;">স্মার্ট অটোমেশন</h3>
            <p>সুদক্ষ প্রফেশনাল টিম দ্বারা পানির পাম্প ও হোম অটোমেশন সেবা</p>
            <p style="color: #94a3b8; font-size: 13px; margin-top: 5px;">ঠিকানা: উপশহর, নিউ মার্কেট | প্রোপ্রাইটর: ওয়াহিদুল ইসলাম হাফিজ</p>
            <p style="color: #38bdf8; font-weight: 600; margin-top: 8px;"><i class="fa-solid fa-phone"></i> ০১৭১২-৯৮৬৩৬০</p>
        </div>
    </footer>

</body>
</html>