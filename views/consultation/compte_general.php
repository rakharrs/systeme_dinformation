<?php
$this->load->view('formulaire/compte_generale');
?>
<hr>
<form id="my_form" method="post" action="<?=base_url('welcome/update_cg')?>" style="display: none">
	<input type="text" name="id_cg" id="form_id_cg">
	<input type="text" name="numero" id="form_numero">
	<input type="text" name="intitule" id="form_intitule">
</form>
<div class="container">
	<div class="row d-flex justify-content-end">
		<div class="col-8">
			<table class="table">
				<thead class="table-dark">
				<tr>
					<th>
						NUMERO DE COMPTE
					</th>
					<th>
						INTITULÉ
					</th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($lines as $line){ ?>
					<tr>
							<input type="text" style="display: none" name="id_cg" id="id_cg<?=$line['id']?>" value="<?=$line['id']?>" disabled>
								<td><input class="form-control" type="text" id="numero<?=$line['id']?>" name="numero" value="<?=$line['id']?>"></td>
								<td><input class="form-control" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['intitule']?>"></td>
								<td>
									<button class="btn btn-dark d-block w-100 mb-3" type="submit" onclick="submitForm(`id_cg<?=$line['id']?>`, `numero<?=$line['id']?>`, `intitule<?=$line['id']?>`)">
										Modifier
									</button>
								</td>
						<td>
							<button class="btn btn-danger d-block w-100 mb-3" type="submit">
								Supprimer
							</button>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	function submitForm(input1, input2, input3) {
		// Get the values of the input fields you want to insert into the form
		var input1Value = document.getElementById(input1).value;
		console.log(input1)
		console.log(input2)
		console.log(input3)
		var input2Value = document.getElementById(input2).value;
		var input3Value = document.getElementById(input3).value;
		console.log(input1Value)
		console.log(input2Value)
		console.log(input3Value)

		// Get a reference to the form you want to submit
		var form = document.getElementById("my_form");

		// Set the values of the hidden input fields in the form
		document.getElementById("form_id_cg").value = input1Value;
		document.getElementById("form_numero").value = input2Value;
		document.getElementById("form_intitule").value = input3Value;

		// Submit the form
		form.submit();
	}
</script>
