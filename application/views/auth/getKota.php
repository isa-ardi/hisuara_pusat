

<option selected disabled>Pilih Kota</option>
<?php foreach($kota as $kot): ?>

<option value="<?=$kot->id_kab?>"><?=ucwords(strtolower($kot->nama))?></option>;
<?php endforeach ?>