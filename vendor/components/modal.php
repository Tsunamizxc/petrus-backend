<div style="" id="hidden" class="modal">
    <div class="modal__header">
        <h3 class="modal__header_title">
            Оставить заявку
        </h3>
    </div>
    <form action="" class="modal__form" id='applicationFormModal'>
        <div class="modal__column">
            <div class="modal__column_line">
                <div class="modal__lime_item">
                    <label for="" class="modal__item_label">Имя*</label>
                    <input type="text" class="modal__item_input" name='name'>
                </div>
                <div class="modal__lime_item">
                    <label for="" class="modal__item_label">Компания*</label>
                    <input type="text" class="modal__item_input" name='company'>
                </div>
            </div>
            <div class="modal__column_line">
                <div class="modal__lime_item">
                    <label for="" class="modal__item_label">Телефон*</label>
                    <input type="text" class="modal__item_input" name='phone'>
                </div>
                <div class="modal__lime_item">
                    <label for="" class="modal__item_label">E-mail*</label>
                    <input type="text" class="modal__item_input" name='email'>
                </div>
            </div>
            <div class="modal__column_textarea">
                <label for="" class="modal__item_label">Сообщение</label>
                <textarea name="" id="" class="modal__textarea_item" name='message'></textarea>
            </div>
            <div class="modal__column_button">
                <button class="modal__button_item">Отправить</button>
            </div>
            <div id="responseMessageModal"></div>
        </div>
    </form>
</div>
<script>
        document.getElementById('applicationFormModal').addEventListener('submit', function(e) {
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
                document.getElementById('responseMessageModal').innerHTML = 
                    data.success ? 
                    `<p style="color: rgb(9, 124, 187);">${data.message}</p>` : 
                    `<p style="color: red;">${data.message}</p>`;
                
                if (data.success) {
                    document.getElementById('applicationFormModal').reset();
                }
            })
            .catch(error => {
                document.getElementById('responseMessageModal').innerHTML = 
                    `<p style="color: red;">Произошла ошибка: ${error.message}</p>`;
            });
        });
    </script>