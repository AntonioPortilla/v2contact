jQuery(document).ready(function($){var esc_attr=esc_html=function(e){if(/[&\<\>"']/.test(e=String(e)))e=e.replace(/&/g,"&").replace(/</g,"&lt;").replace(/>/g,"&gt;"),e=e.replace(/"/g,"&quot;").replace(/'/g,"&#039;");return e};if(location.href.match(/page\=ws-plugin--optimizemember-pro-stripe-ops/)){$("select#ws-plugin--optimizemember-auto-eot-system-enabled").change(function(){var e=$(this),t=e.val();var n=$("p#ws-plugin--optimizemember-auto-eot-system-enabled-via-cron");if(t==2)n.show();else n.hide()})}else if(location.href.match(/page\=ws-plugin--optimizemember-pro-stripe-forms/)){var taxMayApply="<?php echo (int)c_ws_plugin__optimizemember_pro_stripe_utilities::tax_may_apply(); ?>"=="1";var handleFormDescriptions=function(){var e=this.id.replace(/^ws-plugin--optimizemember-pro-(.+?)-(trial-period|trial-amount|trial-term|amount|term|currency)$/g,"$1");var t=$("input#ws-plugin--optimizemember-pro-"+e+"-trial-amount").val().replace(/[^0-9\.]/g,"");var n=$("input#ws-plugin--optimizemember-pro-"+e+"-trial-period").val().replace(/[^0-9]/g,"");var r=$.trim($("select#ws-plugin--optimizemember-pro-"+e+"-trial-term :selected").text());var i=$("input#ws-plugin--optimizemember-pro-"+e+"-amount").val().replace(/[^0-9\.]/g,"");var s=$.trim($("select#ws-plugin--optimizemember-pro-"+e+"-term :selected").text());var o=$("select#ws-plugin--optimizemember-pro-"+e+"-currency").val().replace(/[^A-Z]/g,"");$("input#ws-plugin--optimizemember-pro-"+e+"-desc").val((n>0?n+" "+(n==1?r.replace(/s$/,""):r)+" "+(t>0?"@ "+t:"free")+" / then ":"")+""+i+" "+o+""+(taxMayApply?" + tax":"")+" / "+s)};$("div.ws-menu-page select[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-term$/)}).change(function(){var e=this.id.replace(/^ws-plugin--optimizemember-pro-(.+?)-term$/g,"1");var t=$(this).val().split("-")[2].replace(/[^0-1BN]/g,"")==="BN"?1:0;$("p#ws-plugin--optimizemember-pro-"+e+"-trial-line").css("display",t?"none":"");$("span#ws-plugin--optimizemember-pro-"+e+"-trial-then").css("display",t?"none":"");t?$("input#ws-plugin--optimizemember-pro-"+e+"-trial-period").val(0):null;t?$("input#ws-plugin--optimizemember-pro-"+e+"-trial-amount").val("0.00"):null});$("div.ws-menu-page input[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification|ccap)-ccaps$/)}).keyup(function(){var e=this.value.replace(/^(-all|-al|-a|-)[;,]*/gi,""),t=this.value.match(/^(-all|-al|-a|-)[;,]*/i)?"-all,":"";if(e.match(/[^a-z_0-9,]/))this.value=t+$.trim($.trim(e).replace(/[ \-]/g,"_").replace(/[^a-z_0-9,]/gi,"").toLowerCase())});$("div.ws-menu-page input[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-trial-amount$/)}).keyup(handleFormDescriptions);$("div.ws-menu-page input[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-trial-period$/)}).keyup(handleFormDescriptions);$("div.ws-menu-page select[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-trial-term$/)}).change(handleFormDescriptions);$("div.ws-menu-page input[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-amount$/)}).keyup(handleFormDescriptions);$("div.ws-menu-page select[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-term$/)}).change(handleFormDescriptions);$("div.ws-menu-page select[id]").filter(function(){return this.id.match(/^ws-plugin--optimizemember-pro-(level[1-9][0-9]*|modification)-currency$/)}).change(handleFormDescriptions);ws_plugin__optimizemember_pro_stripeFormGenerate=function(form){var shortCodeTemplate='[optimizeMember-Pro-Stripe-Form %%attrs%% coupon="" accept_coupons="0" default_country_code="US" captcha="0" /]',shortCodeTemplateAttrs="",labels={};eval("<?php echo c_ws_plugin__optimizemember_utils_strings::esc_dq($vars['labels']); ?>");var shortCode=$("input#ws-plugin--optimizemember-pro-"+form+"-shortcode");var modLevel=$("select#ws-plugin--optimizemember-pro-modification-level");var level=form==="modification"?modLevel.val().split(":",2)[1]:form.replace(/^level/,"");var label=labels["level"+level].replace(/"/g,"");var trialAmount=$("input#ws-plugin--optimizemember-pro-"+form+"-trial-amount").val().replace(/[^0-9\.]/g,"");var trialPeriod=$("input#ws-plugin--optimizemember-pro-"+form+"-trial-period").val().replace(/[^0-9]/g,"");var trialTerm=$("select#ws-plugin--optimizemember-pro-"+form+"-trial-term").val().replace(/[^A-Z]/g,"");var regAmount=$("input#ws-plugin--optimizemember-pro-"+form+"-amount").val().replace(/[^0-9\.]/g,"");var regPeriod=$("select#ws-plugin--optimizemember-pro-"+form+"-term").val().split("-")[0].replace(/[^0-9]/g,"");var regTerm=$("select#ws-plugin--optimizemember-pro-"+form+"-term").val().split("-")[1].replace(/[^A-Z]/g,"");var regRecur=$("select#ws-plugin--optimizemember-pro-"+form+"-term").val().split("-")[2].replace(/[^0-1BN]/g,"");var regRecurTimes="";var desc=$.trim($("input#ws-plugin--optimizemember-pro-"+form+"-desc").val().replace(/"/g,""));var currencyCode=$("select#ws-plugin--optimizemember-pro-"+form+"-currency").val().replace(/[^A-Z]/g,"");var cCaps=$.trim($.trim($("input#ws-plugin--optimizemember-pro-"+form+"-ccaps").val()).replace(/^(-all|-al|-a|-)[;,]*/gi,"").replace(/[ \-]/g,"_").replace(/[^a-z_0-9,]/gi,"").toLowerCase());cCaps=$.trim($("input#ws-plugin--optimizemember-pro-"+form+"-ccaps").val()).match(/^(-all|-al|-a|-)[;,]*/i)?(cCaps?"-all,":"-all")+cCaps.toLowerCase():cCaps.toLowerCase();trialPeriod=regRecur==="BN"?"0":trialPeriod;trialAmount=!trialAmount||isNaN(trialAmount)||trialAmount<.01||trialPeriod<=0?"0":trialAmount;regAmount=!regAmount||isNaN(regAmount)||regAmount<.01||regAmount<=0?"0":regAmount;var levelCcapsPer=regRecur==="BN"&&regTerm!=="L"?level+":"+cCaps+":"+regPeriod+" "+regTerm:level+":"+cCaps;levelCcapsPer=levelCcapsPer.replace(/\:+$/g,"");if(trialAmount!=="0"&&(isNaN(trialAmount)||trialAmount<0)){alert("— Oops, a slight problem: —\n\nWhen provided, Trial Amount must be >= 0.00");return false}else if(trialAmount!=="0"&&trialAmount>999999.99){alert("— Oops, a slight problem: —\n\nMaximum Trial Amount is: 999999.99");return false}else if(trialAmount!=="0"&&trialTerm==="D"&&trialPeriod>365){alert("— Oops, a slight problem: —\n\nMaximum paid Trial Days is: 365.\nIf you want to offer more than 365 days, please choose Weeks or Months from the drop-down.");return false}else if(trialAmount!=="0"&&trialTerm==="W"&&trialPeriod>52){alert("— Oops, a slight problem: —\n\nMaximum paid Trial Weeks is: 52.\nIf you want to offer more than 52 weeks, please choose Months from the drop-down.");return false}else if(trialAmount!=="0"&&trialTerm==="M"&&trialPeriod>12){alert("— Oops, a slight problem: —\n\nMaximum paid Trial Months is: 12.\nIf you want to offer more than 12 months, please choose Years from the drop-down.");return false}else if(trialAmount!=="0"&&trialTerm==="Y"&&trialPeriod>2){alert("— Oops, a slight problem: —\n\nMax paid Trial Period Years is: 2. * This is a Stripe limitation.");return false}else if(regAmount!=="0"&&(isNaN(regAmount)||regAmount<.5)){alert("— Oops, a slight problem: —\n\nAmount (if greater than zero), must be >= 0.50. This is a Stripe limitation; minimum amount is 0.50.");return false}else if(regAmount>999999.99){alert("— Oops, a slight problem: —\n\nMaximum Amount is: 999999.99");return false}else if(!desc){alert("— Oops, a slight problem: —\n\nPlease type a Description for this Form.");return false}shortCodeTemplateAttrs+=form==="modification"?'modify="1" ':"";shortCodeTemplateAttrs+='level="'+esc_attr(level)+'" ccaps="'+esc_attr(cCaps)+'" desc="'+esc_attr(desc)+'" cc="'+esc_attr(currencyCode)+'" custom="<?php echo c_ws_plugin__optimizemember_utils_strings::esc_js_sq (esc_attr ($_SERVER["HTTP_HOST"])); ?>"';shortCodeTemplateAttrs+=' ta="'+esc_attr(trialAmount)+'" tp="'+esc_attr(trialPeriod)+'" tt="'+esc_attr(trialTerm)+'" ra="'+esc_attr(regAmount)+'" rp="'+esc_attr(regPeriod)+'" rt="'+esc_attr(regTerm)+'" rr="'+esc_attr(regRecur)+'"';shortCode.val(shortCodeTemplate.replace(/%%attrs%%/,shortCodeTemplateAttrs));alert("Your Form has been generated.\nPlease copy/paste the Shortcode into your WordPress Editor.");shortCode.each(function(){this.focus(),this.select()});return false};ws_plugin__optimizemember_pro_stripeCcapFormGenerate=function(e){var t='[optimizeMember-Pro-Stripe-Form %%attrs%% coupon="" accept_coupons="0" default_country_code="US" captcha="0" /]',n="";var r=$("input#ws-plugin--optimizemember-pro-ccap-shortcode");var i=$.trim($("input#ws-plugin--optimizemember-pro-ccap-desc").val().replace(/"/g,""));var s=$("input#ws-plugin--optimizemember-pro-ccap-amount").val().replace(/[^0-9\.]/g,"");var o=$("select#ws-plugin--optimizemember-pro-ccap-term").val().split("-")[0].replace(/[^0-9]/g,"");var u=$("select#ws-plugin--optimizemember-pro-ccap-term").val().split("-")[1].replace(/[^A-Z]/g,"");var a=$("select#ws-plugin--optimizemember-pro-ccap-term").val().split("-")[2].replace(/[^0-1BN]/g,"");var f=$("select#ws-plugin--optimizemember-pro-ccap-currency").val().replace(/[^A-Z]/g,"");var l=$.trim($.trim($("input#ws-plugin--optimizemember-pro-ccap-ccaps").val()).replace(/^(-all|-al|-a|-)[;,]*/gi,"").replace(/[ \-]/g,"_").replace(/[^a-z_0-9,]/gi,"").toLowerCase());l=$.trim($("input#ws-plugin--optimizemember-pro-ccap-ccaps").val()).match(/^(-all|-al|-a|-)[;,]*/i)?(l?"-all,":"-all")+l.toLowerCase():l.toLowerCase();s=!s||isNaN(s)||s<.01||s<=0?"0":s;var c=a==="BN"&&u!=="L"?"*:"+l+":"+o+" "+u:"*:"+l;c=c.replace(/\:+$/g,"");if(!l||l==="-all"){alert("— Oops, a slight problem: —\n\nPlease provide at least one Custom Capability.");return false}else if(s!=="0"&&(isNaN(s)||s<0)){alert("— Oops, a slight problem: —\n\nAmount (if greater than zero), must be >= 0.50. This is a Stripe limitation; minimum amount is 0.50.");return false}else if(s>999999.99){alert("— Oops, a slight problem: —\n\nMaximum Amount is: 999999.99");return false}else if(!i){alert("— Oops, a slight problem: —\n\nPlease type a Description for this Form.");return false}n+='level="*" ccaps="'+esc_attr(l)+'" desc="'+esc_attr(i)+'" cc="'+esc_attr(f)+'" custom="<?php echo c_ws_plugin__optimizemember_utils_strings::esc_js_sq (esc_attr ($_SERVER["HTTP_HOST"])); ?>"';n+=' ra="'+esc_attr(s)+'" rp="'+esc_attr(o)+'" rt="'+esc_attr(u)+'" rr="'+esc_attr(a)+'"';r.val(t.replace(/%%attrs%%/,n));alert("Your Form has been generated.\nPlease copy/paste the Shortcode into your WordPress Editor.");r.each(function(){this.focus(),this.select()});return false};ws_plugin__optimizemember_pro_stripeSpFormGenerate=function(){var e='[optimizeMember-Pro-Stripe-Form %%attrs%% coupon="" accept_coupons="0" default_country_code="US" captcha="0" /]',t="";var n=$("input#ws-plugin--optimizemember-pro-sp-shortcode");var r=$("select#ws-plugin--optimizemember-pro-sp-leading-id").val().replace(/[^0-9]/g,"");var i=$("select#ws-plugin--optimizemember-pro-sp-additional-ids").val()||[];var s=$("select#ws-plugin--optimizemember-pro-sp-hours").val().replace(/[^0-9]/g,"");var o=$("input#ws-plugin--optimizemember-pro-sp-amount").val().replace(/[^0-9\.]/g,"");var u=$.trim($("input#ws-plugin--optimizemember-pro-sp-desc").val().replace(/"/g,""));var a=$("select#ws-plugin--optimizemember-pro-sp-currency").val().replace(/[^A-Z]/g,"");o=!o||isNaN(o)||o<.01||o<=0?"0":o;if(!r){alert("— Oops, a slight problem: —\n\nPlease select a Leading Post/Page.\n\n*Tip* If there are no Posts/Pages in the menu, it's because you've not configured OptimizeMember for Specific Post/Page Access yet. See: OptimizeMember -› Restriction Options -› Specific Post/Page Access.");return false}else if(o!=="0"&&(isNaN(o)||o<0)){alert("— Oops, a slight problem: —\n\nAmount (if greater than zero), must be >= 0.50. This is a Stripe limitation; minimum amount is 0.50.");return false}else if(o>999999.99){alert("— Oops, a slight problem: —\n\nMaximum Amount is: 999999.99");return false}else if(!u){alert("— Oops, a slight problem: —\n\nPlease type a Description for this Form.");return false}for(var f=0,l=r;f<i.length;f++)if(i[f]&&i[f]!==r)l+=","+i[f];var c="sp:"+l+":"+s;t+='sp="1" ids="'+esc_attr(l)+'" exp="'+esc_attr(s)+'" desc="'+esc_attr(u)+'" cc="'+esc_attr(a)+'"';t+=' custom="<?php echo c_ws_plugin__optimizemember_utils_strings::esc_js_sq (esc_attr ($_SERVER["HTTP_HOST"])); ?>" ra="'+esc_attr(o)+'"';n.val(e.replace(/%%attrs%%/,t));alert("Your Form has been generated.\nPlease copy/paste the Shortcode into your WordPress Editor.");n.each(function(){this.focus(),this.select()});return false};ws_plugin__optimizemember_pro_stripeRegLinkGenerate=function(){var e=$("select#ws-plugin--optimizemember-pro-reg-link-level").val().replace(/[^0-9]/g,"");var t=$.trim($("input#ws-plugin--optimizemember-pro-reg-link-subscr-id").val());var n=$.trim($("input#ws-plugin--optimizemember-pro-reg-link-custom").val());var r=$.trim($.trim($("input#ws-plugin--optimizemember-pro-reg-link-ccaps").val()).replace(/[ \-]/g,"_").replace(/[^a-z_0-9,]/gi,"").toLowerCase());var i=$.trim($("input#ws-plugin--optimizemember-pro-reg-link-fixed-term").val().replace(/[^A-Z 0-9]/gi,"").toUpperCase());var s=$("p#ws-plugin--optimizemember-pro-reg-link"),o=$("img#ws-plugin--optimizemember-pro-reg-link-loading");var u=i&&!i.match(/L$/)?e+":"+r+":"+i:e+":"+r;u=u.replace(/\:+$/g,"");if(!t){alert("— Oops, a slight problem: —\n\nPaid Subscr. ID is a required value.");return false}else if(!n||n.indexOf('<?php echo c_ws_plugin__optimizemember_utils_strings::esc_js_sq ($_SERVER["HTTP_HOST"]); ?>')!==0){alert("— Oops, a slight problem: —\n\nThe Custom Value MUST start with your domain name.");return false}else if(i&&!i.match(/^[1-9]+ (D|W|M|Y|L)$/)){alert("— Oops, a slight problem: —\n\nThe Fixed Term Length is not formatted properly.");return false}s.hide(),o.show(),$.post(ajaxurl,{action:"ws_plugin__optimizemember_reg_access_link_via_ajax",ws_plugin__optimizemember_reg_access_link_via_ajax:'<?php echo c_ws_plugin__optimizemember_utils_strings::esc_js_sq (wp_create_nonce ("ws-plugin--optimizemember-reg-access-link-via-ajax")); ?>',optimizemember_reg_access_link_subscr_gateway:"stripe",optimizemember_reg_access_link_subscr_id:t,optimizemember_reg_access_link_custom:n,optimizemember_reg_access_link_item_number:u},function(e){s.show().html('<a href="'+esc_attr(e)+'" target="_blank" rel="external">'+esc_html(e)+"</a>"),o.hide()});return false};ws_plugin__optimizemember_pro_stripeSpLinkGenerate=function(){var e=$("select#ws-plugin--optimizemember-pro-sp-link-leading-id").val().replace(/[^0-9]/g,"");var t=$("select#ws-plugin--optimizemember-pro-sp-link-additional-ids").val()||[];var n=$("select#ws-plugin--optimizemember-pro-sp-link-hours").val().replace(/[^0-9]/g,"");var r=$("p#ws-plugin--optimizemember-pro-sp-link"),i=$("img#ws-plugin--optimizemember-pro-sp-link-loading");if(!e){alert("— Oops, a slight problem: —\n\nPlease select a Leading Post/Page.\n\n*Tip* If there are no Posts/Pages in the menu, it's because you've not configured OptimizeMember for Specific Post/Page Access yet. See: OptimizeMember -› Restriction Options -› Specific Post/Page Access.");return false}for(var s=0,o=e;s<t.length;s++)if(t[s]&&t[s]!==e)o+=","+t[s];r.hide(),i.show(),$.post(ajaxurl,{action:"ws_plugin__optimizemember_sp_access_link_via_ajax",ws_plugin__optimizemember_sp_access_link_via_ajax:'<?php echo c_ws_plugin__optimizemember_utils_strings::esc_js_sq (wp_create_nonce ("ws-plugin--optimizemember-sp-access-link-via-ajax")); ?>',optimizemember_sp_access_link_ids:o,optimizemember_sp_access_link_hours:n},function(e){r.show().html('<a href="'+esc_attr(e)+'" target="_blank" rel="external">'+esc_html(e)+"</a>"),i.hide()});return false}}})