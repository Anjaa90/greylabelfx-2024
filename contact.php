<?php include ('includes/header.php');?>


        <div class="main-content">

            <div class="rwt-contact-area rn-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb--40">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                                data-sal-delay="100">
                                <h1 class="subtitle "><span class="theme-gradient">Contact Form</span></h1>
                                <h2 class="title w-600 mb--20">Our Contact Address Here.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row--15">
                        <div class="col-lg-12">
                            <div class="rn-contact-address mt_dec--30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rn-address">
                                            <div class="icon">
                                                <!-- Telegram Icon (using image) -->
                                                <a href="https://telegram.me/greylabelfx" target="_blank">
                                                    <img loading="lazy" src="assets/images/2022-06-05.webp" alt="Telegram"
                                                        style="width: 50px; height: 50px;">
                                                </a>
                                            </div>
                                            <div class="inner">
                                            
                                                <p>
                                                    Contact us <on:br></on:br><br> <br>WhatsApp
                                                    <a href="https://wa.me/447403655762" target="_blank" ><span style="color: #039BE5;"> +447403655762</span></a></p>
                                                    <p>Telegram<a href="https://telegram.me/greylabelfx" target="_blank" > <span style="color:#039BE5;">@greylabelfx</span></a>
                                                        <p></p>
                                                  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rn-address">
                                            <div class="icon">
                                                <i class="feather-mail"></i>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title">Our Email Address</h3>
                                                <p><a href="mailto:sales@greylabelfx.com">sales@greylabelfx.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rn-address">
                                            <div class="icon">
                                                <i class="feather-map-pin"></i>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title">Our Location</h3>
                                                <div>
                                                    <p style="font-size: 1.3rem;">
                                                        <strong>Shared Server Solutions Ltd <br>St Vincent:</strong><br>
                                                        First St Vincent Bank Ltd Building, James Street, Kingstown
                                                    </p>
                                                    <br> <!-- Space between addresses -->
                                                    <p style="font-size: 1.3rem;">
                                                        <strong>Hong Kong:</strong><br>
                                                        193 Prince Edward Rd, Grand Century Place, Kowloon, Hong Kong
                                                        SAR China, HKG
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .rn-address {
                            overflow: hidden;
                            /* Prevents content from overflowing */
                            text-overflow: ellipsis;
                            /* Adds ellipsis for long text (optional) */
                            word-wrap: break-word;
                            /* Ensures words wrap within the card */
                            padding: 20px;
                            /* Adds spacing within the card */
                            box-sizing: border-box;
                            /* Ensures padding is included in total size */
                        }

                        .rn-address .inner {
                            max-width: 100%;
                            /* Ensures content stays within the card */
                        }

                        .rn-address p {
                            margin-bottom: 10px;
                            /* Adds space between text paragraphs */
                            font-size: 1rem;
                            /* Ensures text size is readable */
                            line-height: 1.5;
                            /* Improves readability */
                        }

                        .rn-address h3 {
                            margin-bottom: 15px;
                            /* Space between heading and content */
                            font-size: 1.25rem;
                            /* Adjust heading size for balance */
                            font-weight: bold;
                        }
                    </style>

                    <div class="row mt--40 row--15">
                        <div class="col-lg-7">
                            <form id="consult" class="contact-form-1" action="contact_us.php" method="post">
                                <div class="form-group"><input type="text" name="name" placeholder="Your Name*"
                                        required></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="number" name="phone" placeholder="Contact*"
                                                required></div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="email" name="email"
                                                placeholder="Your Email*" required></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select id="country" name="country" style="background-color:var(--color-dark);"
                                        required>
                                        <option>Select Country*</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and Mcdonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthelemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="CS">Serbia and Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.s.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="skype" placeholder="Skype">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="telegram"
                                                placeholder="Telegram"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group"><textarea name="comments" placeholder="Requirements*"
                                                required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LcfPA4jAAAAAFoSyWcNwcvzuotDlKIE7O2qNPIR">
                                            </div>
                                        </div>


                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button class="btn-default btn-large" value="Send">Submit Now</button>
                                    </div>

                                </div>



                            </form>

                        </div>
                        <div class="col-lg-5 mt_md--30 mt_sm--30">
                            <div class="google-map-style-1">
                                <img loading="lazy" src="assets/images/contact-us.png" alt="contact us">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container" style="padding-top:110px ;">
                        <div class="col-lg-12 col-md-offset-1">
                            <table class="pricing-table-box">
                                <tbody>
                                    <tr>
                                        <td width="20%" class="pricing-table-box-text">
                                            <h4
                                                style="margin-top: 20px; font-weight:600; text-align: center; font-size:18px; ">
                                                OUR BEST FEATURES</h4>
                                        </td>
                                        <td width="20%">
                                            <div class="pricing-table-box-item">
                                                <div class="pricing-table-box-item-head color2">
                                                    <p><span style="color:white ;"><a class="angular"
                                                                href="#">Standard</a></span>
                                                    </p>
                                                </div>

                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="pricing-table-box-item">
                                                <div class="pricing-table-box-item-head color2">
                                                    <p><span style="color:white ;"><a class="angular"
                                                                href="#">Advanced</a></span>
                                                    </p>

                                                </div>


                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row"><span
                                                style="color:white ; font-size: 20px; font-weight: bold;">Monthly
                                                Fee</span></td>
                                        <td class="second-row"><span class="glyphicon glyphicon-ok"
                                                style="font-size: 20px; font-weight: bold;">$1000</span></td>
                                        <td class="third-row"><span class="glyphicon glyphicon-ok"
                                                style="font-size: 20px; font-weight: bold;">$1500</span></td>

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row" style="background-color:#2a2828 ;"><span
                                                style="color:white ; font-size: 20px; font-weight: bold;">One Time Setup
                                                Fee</span></td>
                                        <td class="second-row" style="background-color:#2a2828 ;"><span
                                                class="glyphicon glyphicon-ok"
                                                style="font-size: 20px; font-weight: bold;">$1000</span></td>
                                        <td class="third-row" style="background-color:#2a2828 ;"><span
                                                class="glyphicon glyphicon-ok"
                                                style="font-size: 20px; font-weight: bold;">$1000</span></td>

                                    </tr>

                                    <tr class="pricing-table-box-list">
                                        <td class="first-row"><span style="color:white ;">Groups</span></td>
                                        <td class="second-row"><span class="glyphicon glyphicon-ok">3</span></td>
                                        <td class="third-row"><span class="glyphicon glyphicon-ok">5</span></td>

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row" style="background-color:#2a2828 ;"><span
                                                style="color:white ;">Managers</span></td>
                                        <td class="second-row" style="background-color:#2a2828 ;">3</td>
                                        <td class="third-row" style="background-color:#2a2828 ;">5</td>

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row"><span style="color:white ;">Symbols</span></td>
                                        <td class="second-row">120</td>
                                        <td class="third-row">150</td>

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row" style="background-color:#2a2828 ;"><span
                                                style="color:white ;">Instruments</span></td>
                                        <td class="second-row" style="background-color:#2a2828 ;">FX, CFD, Commodities,
                                            Indices, <br>Crypto</td>
                                        <td class="third-row" style="background-color:#2a2828 ;">FX, CFD, Commodities,
                                            Indices,<br> Crypto, Stocks</td>

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row"><span style="color:white ;">Terminals</span></td>
                                        </td>
                                        <td class="second-row">Mobile, Desktop</td>
                                        <td class="third-row">Web, Mobile, Desktop</td>

                                    </tr>

                                    <tr class="pricing-table-box-list">

                                    </tr>
                                    <tr class="pricing-table-box-list">

                                    </tr>
                                    <tr class="pricing-table-box-list">

                                    </tr>
                                    <tr class="pricing-table-box-list">
                                        <td class="first-row" style="border: none;"></td>
                                        <td class="second-row" style="border: none;">
                                            <div class="pricing-table-box-item-purchase">
                                                <button class="btn btn-success btn-block color2"><span><a
                                                            href="#">Read More</a></span></button>
                                            </div>
                                        </td>
                                        <td class="third-row" style="border: none;">
                                            <div class="pricing-table-box-item-purchase">
                                                <button class="btn btn-success btn-block color2"><span><a
                                                            href="#">Read More</a></span></button>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div style="height:50px;clear:both;">

                        </div>


                    </div> -->
                </div>
            </div>

        </div>

        <?php include ('includes/footer.php');?>
    </main>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5VSCQZZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"Message us","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"447403655762","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
    <script type="text/javascript" style="margin-bottom: 100px;">
        (function() {
    var options = {
        telegram: "greylabelfx",
        call_to_action: "Message us",
        button_color: "#FF6550",
        position: "left",
    };
    var proto = document.location.protocol,
        host = "getbutton.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);

        // Add custom styling after the widget is initialized
        setTimeout(function() {
            var widget = document.querySelector("#wh-widget-send-button");
            if (widget) {
                widget.style.top = "10px"; // Move the widget up
                widget.style.zIndex = "10000"; // Ensure it's above other elements
            }
        }, 500); // Wait for the widget to be loaded
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();

    </script>


    

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/629a0fa4b0d10b6f3e758a42/1g4ksq7n7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-230714452-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-230714452-1');
    </script>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "PSP",
      "alternateName": "PSP",
      "url": "https://greylabelfx.com/psp.php",
      "logo": "https://greylabelfx.com/assets/images/logo/white-01.webp",
      "sameAs": [
        "https://www.facebook.com/Greylabelfx",
        "https://twitter.com/GreylabelFX",
        "https://www.instagram.com/greylabelfx/",
        "https://www.linkedin.com/company/greylabelfx"
      ]
    }
    </script>



    <div class="rn-back-top">
        <i class="feather-arrow-up"></i>
    </div>

    <!-- Modernizr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/3.11.7/modernizr.min.js" defer></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" defer></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" defer></script>

<!-- Feather Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" defer></script>

<!-- Slick Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>

<!-- Lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" defer></script>

<!-- Remaining scripts retained from assets folder -->
<script src="assets/js/vendor/waypoint.min.js" defer></script>
<script src="assets/js/vendor/wow.min.js" defer></script>
<script src="assets/js/vendor/counterup.min.js" defer></script>
<script src="assets/js/vendor/sal.min.js" defer></script>
<script src="assets/js/vendor/masonry.js" defer></script>
<script src="assets/js/vendor/imageloaded.js" defer></script>
<script src="assets/js/vendor/magnify.min.js" defer></script>
<script src="assets/js/vendor/easypie.js" defer></script>
<script src="assets/js/vendor/text-type.js" defer></script>
<script src="assets/js/vendor/jquery.style.swicher.js" defer></script>
<script src="assets/js/vendor/js.cookie.js" defer></script>
<script src="assets/js/vendor/jquery-one-page-nav.js" defer></script>

<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Main JS -->
<script src="assets/js/main.js" defer></script>

</body>



</html>