    <div class="contacts" id="contacts">
        <div class="container">
            <div class="contacts__row">
                <div class="contacts__row_content">
                    <h2 class="contacts__content_title">
                        Контакты
                    </h2>
                    <p class="contacts__content_city">
                        Омск
                    </p>
                    <p class="contacts__content_name">
                        АО «ПЕТРУС»
                    </p>
                    <a href="#" class="contacts__content_number">
                    +7(999) 999 99-99
                </a>
                    <p class="contacts__content_adress">
                        мкр. Береговой, ул. Иртышская, 1А, Омск, Омская область, 644901 <a href="#" class="contacts__content_link">(На карте)</a>
                    </p>
                </div>
                <div class="contacts__row_forms">
                    <h2 class="contacts__forms_title">
                        Связаться с нами
                    </h2>
                    <form action="vendor/functions/contactscode.php" id='applicationForm' method="post" class="contacts__forms_form">
                        <div class="contacts__form_row">
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                Имя*
                            </label>
                                <input type="text" class="contacts__row_input" name='name'>
                            </div>
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                Компания*
                            </label>
                                <input type="text" class="contacts__row_input" name='company'>
                            </div>
                        </div>
                        <div class="contacts__form_row">
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                Телефон*
                            </label>
                                <input type="text" class="contacts__row_input" name='phone'>
                            </div>
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                E-mail*
                            </label>
                                <input type="email" class="contacts__row_input" name='email'>
                            </div>
                        </div>
                        <div class="contacts__form_textarea">
                            <label for="" class="contacts__textarea_name">Сообщение</label>
                            <textarea id="" class="contacts__textarea_item" name='message'></textarea>
                        </div>
                        <button type="submit" class="contacts__textarea_btn">Отправить</button>
                            <div id="responseMessage"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch('vendor/functions/contactscode.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Ошибка сети');
                }
                return response.json();
            })
            .then(data => {
                document.getElementById('responseMessage').innerHTML = 
                    data.success ? 
                    `<p style="color: white;">${data.message}</p>` : 
                    `<p style="color: red;">${data.message}</p>`;
                
                if (data.success) {
                    document.getElementById('applicationForm').reset();
                }
            })
            .catch(error => {
                document.getElementById('responseMessage').innerHTML = 
                    `<p style="color: red;">Произошла ошибка: ${error.message}</p>`;
            });
        });
    </script>