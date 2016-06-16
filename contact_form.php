<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 15.06.2016
 * Time: 22:17
 */

$contact_form=<<<body

                <form id="contactform" name="contact" method="post" action="#">
                    <p class="note"><span class="req">*</span> Поля з зірочкою обов'язкові для заповнення</p>
                    <div class="row">
                        <label for="name">Ваше ім'я <span class="req">*</span></label>
                        <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Введіть ваше ім'я" required>
                    </div>

                    <div class="row">
                        <label for="email">E-mail <span class="req">*</span></label>
                        <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder=" address@gmail.com" required>
                    </div>

                    <div class="row">
                        <label for="subject">Тема <span class="req">*</span></label>
                        <input type="text" name="subject" id="subject" class="txt" tabindex="3" placeholder="Тема листа" required>
                    </div>

                    <div class="row">
                        <label for="message">Повідомлення <span class="req">*</span></label>
                        <textarea name="message" id="message" class="txt" tabindex="4" required></textarea>
                    </div>

                    <div >
                        <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Відправити лист">
                    </div>
                </form>

body;
