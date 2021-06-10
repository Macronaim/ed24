<script>
    jQuery(document).ready(function() {
        jQuery("head").append("<style type=\"text/css\">label span.required { color: #9E3C89; }span.help-inline, span.help-block { color: #888; font-size: .9em; font-style: italic; }.label-rgpd{font-size: 11px;font-weight: normal;font-style: italic;padding-left:0px;display:block !important;}form.form-horizontal .form-group .label-rgpd input.form-control{position:relative;display:inline-block;width:auto !important;height:auto;margin: 0 7px 2px 0;}.info-rgpd p{font-size: 10px;font-weight:normal;font-style:italic;text-align:justify;margin-top:15px;opacity:0.8;display:block;clear:both;}#g-recaptcha-response {display: block !important;height: 5px !important;left: 12px;margin: 0 !important;opacity: 0 !important;position: relative;top: -25px;}</style>");
    });
</script>
<form action="#" id="contact_5" method="post" enctype="multipart/form-data" class="form-horizontal">
    <fieldset><input type="hidden" name="_form" value="contact_5" id="contact_5-element-0" />
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-1">Société</label>
            <div class="col-md-8"><input type="text" class="form-control input-md col-md-8 " name="Sociéte" value placeholder="Société" id="contact_5-element-1" /></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-2">Civilité</label>
            <div class="col-md-8"><select name="civilite" class="form-control input-md col-md-8" id="contact_5-element-2"><option value="" selected="selected">Civilité</option><option value="M.">M.</option><option value="Mme">Mme</option><option value="Mlle">Mlle</option></select></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-3"><span class="required">* </span>Nom</label>
            <div class="col-md-8"><input type="text" class="form-control input-md col-md-8" name="nom" value required placeholder="Nom*" id="contact_5-element-3" /></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-4">Prénom</label>
            <div class="col-md-8"><input type="text" class="form-control input-md col-md-8" name="prenom" value placeholder="Prénom" id="contact_5-element-4" /></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-5"><span class="required">* </span>Téléphone</label>
            <div class="col-md-8"><input type="tel" name="tel" value class="form-control input-md col-md-8" required placeholder="Téléphone*" id="contact_5-element-5" /></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-6"><span class="required">* </span>Courriel</label>
            <div class="col-md-8"><input type="email" name="email" value class="form-control input-md col-md-8" required placeholder="Courriel*" id="contact_5-element-6" /></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-7">Localisation</label>
            <div class="col-md-8"><select name="localisation" class="form-control input-md col-md-8" id="contact_5-element-7"><option value="" selected="selected">Localisation</option><option value="Bordeaux">Bordeaux</option><option value="Périgueux">Périgueux</option><option value="Lyon">Lyon</option><option value="Marseille">Marseille</option><option value="Nantes">Nantes</option><option value="Rouen">Rouen</option><option value="Strasbourg">Strasbourg</option><option value="Toulouse">Toulouse</option></select></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-8">Je suis déjà client ?</label>
            <div class="col-md-8"><select name="client" class="form-control input-md col-md-8" id="contact_5-element-8"><option value="" selected="selected">Je suis déjà client ?</option><option value="Oui">Oui</option><option value="Non">Non</option></select></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-9">Services</label>
            <div class="col-md-8"><select name="services" class="form-control input-md col-md-8" id="contact_5-element-9"><option value="" selected="selected">Service à contacter ?</option><option value="Commercial">Commercial</option><option value="Administratif">Administratif</option><option value="Technique">Technique</option><option value="Webmarketing">Webmarketing</option><option value="Qualité">Qualité</option></select></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-10">Je suis intéressé(e) par</label>
            <div class="col-md-8"><select name="Interessé Par" class="form-control input-md col-md-8" id="contact_5-element-10"><option value="" selected="selected">Je suis intéressé(e) par</option><option value="Création de site internet">Création de site internet</option><option value="Référencement local">Référencement local</option><option value="Application mobile">Application mobile</option><option value="Postuler">Postuler</option><option value="Autre">Autre</option></select></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-11">Comment nous avez-vous connus ?</label>
            <div class="col-md-8"><select name="referrer" class="form-control input-md col-md-8" id="contact_5-element-11"><option value="">Comment nous avez-vous connus ?</option><option value="Moteur de recherche">Moteur de recherche</option><option value="Bouche à oreille">Bouche à oreille</option><option value="Courriel">Courriel</option><option value="Publicité papier">Publicité papier</option><option value="Presse">Presse</option></select></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4" for="contact_5-element-12"><span class="required">* </span>Message</label>
            <div class="col-md-8"><textarea rows="5" name="message" class="form-control input-md col-md-8" required style="resize:none;" placeholder="Message*" id="contact_5-element-12"></textarea></div>
        </div>
        <div class="form-group"><label class="control-label col-md-4"><span class="required">* </span>Consentement RGPD</label>
            <div class="col-md-8"><label class="checkbox label-rgpd"> <input id="contact_5-element-13-0" type="checkbox" name="_rgpd[]" class="form-control input-md col-md-8 case-rgpd" required value="J’accepte d’être recontacté par ED CONCEPT 24. J’accepte également que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler. "/> J’accepte d'être recontacté par ED CONCEPT 24. J’accepte également que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler. <strong> **</strong> </label>                                                </div>
        </div>
        <!--
        <div class="form-group">
            <div class="col-md-8">
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <div class="g-recaptcha" data-sitekey="6Lc3IQ4UAAAAALJgNCh1b9v53bCWdrCVZE7rsClM"></div>
            </div>
        </div>
        -->
        <input type="hidden" name="_nid" value="5" id="contact_5-element-15" /><input type="hidden" name="_action" value="send" id="contact_5-element-16" />
        <div class="form-group">
            <div class="form-actions col-md-12"><span class="required">* </span> Champs obligatoires</div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"></label>
            <div class="form-actions col-md-9 col-md-offset-3 text-right"><input type="submit" value="Envoyer" name="btn_submit" class="btn btn-primary" id="contact_5-element-18" /></div>
        </div>
        <div class="info-rgpd">
            <p><strong>**</strong> Les informations recueillies font l’objet d’un traitement informatique destiné à ED CONCEPT 24, responsable du traitement, aux fins de proposition de produits et/ou services et de prospection
                commerciale. Conformément à la réglementation en vigueur, vous disposez notamment d'un droit d'opposition, d'accès, de rectification et d'effacement sur les données personnelles qui vous concernent. Pour
                plus d’informations, cliquez <a href="/mentions-legales.html">ici</a>.</p>
        </div>
    </fieldset>
</form>
<script>
    jQuery(window).load(function() {
        if (jQuery("#g-recaptcha-response").length > 0) {
            jQuery("#g-recaptcha-response").attr("required", "required");
        }
    });
    jQuery(document).ready(function() {
        if (jQuery("#contact_5").attr("action") == '#') {
            jQuery("#contact_5").attr("action", "");
        }
        jQuery("#contact_5").attr("role", "form");

        jQuery("#contact_5").bind("submit", function() {
            jQuery(this).find("input[type=submit]").attr("disabled", "disabled");
        });
    });
    jQuery("#contact_5").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = jQuery(this);
        var url = 'mail.php';

        jQuery.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
                
                alert(data); // show response from the php script.
        }, error: function(){
                console.log("Erreur");
        }
        });  
    });
</script>