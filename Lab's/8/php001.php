<HTML>

	<HEAD>

	</HEAD>

	<BODY>
		<DIV>
			<H1>Лабораторная №8?</H1>
			<H3>Дисциплина: Технололии WEB-программирования</H3>
			<H3>Программист: Банковский А.С. ИВТ-20</H3>
		
			</BR> </BR> </BR>
		</DIV>
		
				
				Введите <B> Я спасу человечество! </B> </BR>
				<FORM method = "POST" action = "php001.php">
				
					<INPUT name = "inputedText">
					
					<INPUT type = "SUBMIT" value = "Отправить" name = "submit">
					
				</FORM>
				
				<?php
				
					$array = ["Азбука", "Пельмени", "Алмаз", "Пуп", "Пупок", "Аллея", "Переход"];
					
					if (isset($_POST['submit']))
					{
						$inputedText = $_POST['inputedText'];
						
						if ($inputedText == 'Я спасу человечество!')
						{
							echo "Осмелюсь пожелать Вам благополучия, герой!";
						}
						else
						{
							foreach ($array as $el)
							{
								if (strstr($el, $inputedText))
								{
									echo $el, '<BR>';
								}
							}
						}
					}
				
				?>
				
				
				
	</BODY>
	
	
	
	
	

</HTML>

<STYLE>
H1 
	{ 
		COLOR: #d5a637;
	}
</STYLE>
