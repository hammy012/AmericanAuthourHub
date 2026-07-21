```html
<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<section class="pricing-section">
    <div class="container">

        <div class="pricing-header">
            <span>OUR PACKAGES</span>
            <h2>Choose Your Publishing Plan</h2>
            <p>
                Flexible publishing solutions designed for aspiring and
                professional authors.
            </p>
        </div>

        <div class="row align-items-stretch">

            <!-- BASIC -->
            <div class="col-lg-4 mb-4">
                <div class="pricing-card">

                    <div class="plan-icon">
                        <i class="fas fa-pen-nib"></i>
                    </div>

                    <h3>Basic</h3>

                    <div class="price">$199</div>

                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Publishing</li>
                        <li><i class="fas fa-check-circle"></i> Formatting</li>
                        <li><i class="fas fa-check-circle"></i> Editing</li>
                        <li><i class="fas fa-check-circle"></i> Proofreading</li>
                        <li><i class="fas fa-check-circle"></i> Account Setup Assistance</li>
                    </ul>

                    <a href="{{ route('contact-us') }}" class="pricing-btn">
                        Get Started
                    </a>

                </div>
            </div>

            <!-- STANDARD -->
            <div class="col-lg-4 mb-4">
                <div class="pricing-card featured">

                    <div class="popular-tag">
                        MOST POPULAR
                    </div>

                    <div class="plan-icon">
                        <i class="fas fa-book-open"></i>
                    </div>

                    <h3>Standard</h3>

                    <div class="price">$450</div>

                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Metadata Optimization</li>
                        <li><i class="fas fa-check-circle"></i> Category & Keyword Selection</li>
                        <li><i class="fas fa-check-circle"></i> Front & Back Cover Design</li>
                        <li><i class="fas fa-check-circle"></i> ISBN Assistance</li>
                        <li><i class="fas fa-check-circle"></i> Print-Ready Files</li>
                        <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                        <li><i class="fas fa-check-circle"></i> Global Distribution Setup</li>
                        <li><i class="fas fa-check-circle"></i> eBook & Paperback Publishing</li>
                        <li><i class="fas fa-check-circle"></i> 40+ Retailers Distribution</li>
                    </ul>

                    <a href="{{ route('contact-us') }}" class="pricing-btn">
                        Get Started
                    </a>

                </div>
            </div>

            <!-- PREMIUM -->
            <div class="col-lg-4 mb-4">
                <div class="pricing-card">

                    <div class="plan-icon">
                        <i class="fas fa-crown"></i>
                    </div>

                    <h3>Premium</h3>

                    <div class="price">$1299</div>

                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Ghostwriting</li>
                        <li><i class="fas fa-check-circle"></i> Publishing</li>
                        <li><i class="fas fa-check-circle"></i> 5 High Quality Illustrations</li>
                        <li><i class="fas fa-check-circle"></i> Metadata Optimization</li>
                        <li><i class="fas fa-check-circle"></i> Category & Keyword Selection</li>
                        <li><i class="fas fa-check-circle"></i> ISBN Assistance</li>
                        <li><i class="fas fa-check-circle"></i> Global Distribution Setup</li>
                        <li><i class="fas fa-check-circle"></i> eBook & Paperback Configuration</li>
                        <li><i class="fas fa-check-circle"></i> 40+ Retailers Distribution</li>
                        <li><i class="fas fa-check-circle"></i> Priority Support</li>
                    </ul>

                    <a href="{{ route('contact-us') }}" class="pricing-btn">
                        Get Started
                    </a>

                </div>
            </div>

        </div>

    </div>
</section>

<style>

.pricing-section{
    padding:100px 0;
    background:#f7f8fb;
}

.pricing-header{
    text-align:center;
    margin-bottom:70px;
}

.pricing-header span{
    color:#9F0B07;
    font-size:14px;
    font-weight:700;
    letter-spacing:3px;
    text-transform:uppercase;
}

.pricing-header h2{
    color:#002768;
    font-size:42px;
    font-weight:800;
    margin:15px 0;
}

.pricing-header p{
    color:#666;
    max-width:650px;
    margin:auto;
    font-size:17px;
}

.pricing-card{
    background:#fff;
    border-radius:18px;
    border:1px solid #e8e8e8;
    height:100%;
    display:flex;
    flex-direction:column;
    position:relative;
    transition:.35s;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.05);
}

.pricing-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:#9F0B07;
}

.pricing-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.10);
}

.plan-icon{
    width:80px;
    height:80px;
    margin:35px auto 20px;
    border-radius:50%;
    background:#9F0B07;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
}

.pricing-card h3{
    text-align:center;
    color:#002768;
    font-size:28px;
    font-weight:700;
    margin-bottom:10px;
}

.price{
    text-align:center;
    font-size:55px;
    font-weight:800;
    color:#9F0B07;
    margin-bottom:25px;
}

.feature-list{
    list-style:none;
    padding:0 30px;
    margin:0;
    flex:1;
}

.feature-list li{
    padding:12px 0;
    border-bottom:1px solid #f0f0f0;
    color:#444;
    font-size:15px;
}

.feature-list li i{
    color:#9F0B07;
    margin-right:10px;
    width:18px;
}

.pricing-btn{
    margin:30px;
    margin-top:auto;
    text-align:center;
    text-decoration:none;
    background:#9F0B07;
    color:#fff;
    padding:14px;
    border-radius:8px;
    font-weight:700;
    transition:.3s;
}

.pricing-btn:hover{
    background:#002768;
    color:#fff;
}

.featured{
    border:2px solid #9F0B07;
    transform:scale(1.03);
}

.featured::before{
    background:#002768;
}

.featured .plan-icon{
    background:#002768;
}

.featured .price{
    color:#002768;
}

.popular-tag{
    position:absolute;
    top:15px;
    right:15px;
    background:#002768;
    color:#fff;
    font-size:11px;
    font-weight:700;
    padding:8px 14px;
    border-radius:20px;
}

@media(max-width:991px){

    .featured{
        transform:none;
    }

    .pricing-header h2{
        font-size:34px;
    }
}

</style>
```
