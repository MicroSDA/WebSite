//Загружаем библиотеку JQuery
	google.load("jquery", "1.3.2");
	google.load("jqueryui", "1.7.2");
	//Функция отправки сообщения
        //Функция отправки сообщения
	function send()
	{
		//Считываем сообщение из поля ввода с id mess_to_add
		var mess=$("#send_mail").val();
                var name=$("#send_name").val();
		// Отсылаем паметры
       $.ajax({
                type:"POST",
                url: "Send_mail.php",
                data:{mess:mess,name:name},
                // Выводим то что вернул PHP
                success: function(html)
				{
					//Если все успешно, загружаем сообщения
					load_messes();
					//Очищаем форму ввода сообщения
					$("#send_mail").val('');
                                       
                }
        });
	}
	//Функция загрузки сообщений
	function load_messes()
	{
		$.ajax({
                type: "POST",
                url:  "Get_mail.php",
                data: "req=ok",
                // Выводим то что вернул PHP
                success: function(html)
				{
			//Очищаем форму ввода
			$("#mess_to_send").empty();
		        //Выводим что вернул нам php
			$("#mess_to_send").append(html);
      
                    
					
                }
        });
	}