# amo-crm-forms-module

using
<pre>
      $amoClient = wire("modules")->get("name=WireAmoCRMForms");
			
			$dataFileds = [
				"page" => $url,
				"name" => "Запрос коммерческого предложения",
				"first_name" => $name,
				"last_name" => "",
				"ip" => $_SERVER['REMOTE_ADDR'],
				"referer" => $_SERVER['HTTP_REFERER'],
				"phone" => $phone,
				"email" => $email,
				"companyName" => $company,
				"message" => $message
			];

			$amoClient->createNewLead($dataFileds);
</pre>
