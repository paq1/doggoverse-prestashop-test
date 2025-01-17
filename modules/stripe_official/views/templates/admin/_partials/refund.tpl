{**
 * Copyright (c) since 2010 Stripe, Inc. (https://stripe.com)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    Stripe <https://support.stripe.com/contact/email>
 * @copyright Since 2010 Stripe, Inc.
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}
{* licence *}
<form id="configuration_form" class="defaultForm form-horizontal stripe_official" action="#stripe_step_2" method="post" enctype="multipart/form-data" novalidate="">
    <input type="hidden" name="submit_refund_id" value="1">
    <div class="panel" id="fieldset_1">
        <div class="panel-heading">
            {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Choose an Order you want to Refund' d='Modules.Stripeofficial.Refund'} {else} {l s='Choose an Order you want to Refund' mod='stripe_official'} {/if}
        </div>
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3 required">
                    {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Stripe Payment ID' d='Modules.Stripeofficial.Refund'} {else} {l s='Stripe Payment ID' mod='stripe_official'} {/if}
                </label>
                <div class="col-lg-9">
                    <input type="text" name="STRIPE_REFUND_ID" id="STRIPE_REFUND_ID" value="" class="fixed-width-xxl" required="required">
                    <p class="help-block">
                        <i>{if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='You can find that ID in the Stripe tab of the order you\'d like to refund. It starts with "ch_" or "py_".' d='Modules.Stripeofficial.Refund'} {else} {l s='You can find that ID in the Stripe tab of the order you\'d like to refund. It starts with "ch_" or "py_".' mod='stripe_official'} {/if}</i>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <div class="radio">
                        <label>
                          <input type="radio" name="STRIPE_REFUND_MODE" id="active_on_refund" value="1" checked="checked">{if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Full refund' d='Modules.Stripeofficial.Refund'} {else} {l s='Full refund' mod='stripe_official'} {/if}
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="STRIPE_REFUND_MODE" id="active_off_refund" value="0">{if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Partial refund' d='Modules.Stripeofficial.Refund'} {else} {l s='Partial refund' mod='stripe_official'} {/if}
                        </label>
                    </div>
                    <p class="help-block">
                        <i>
                            {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='We\'ll submit any refund you make to your customer\'s bank immediately.' d='Modules.Stripeofficial.Refund'} {else} {l s='We\'ll submit any refund you make to your customer\'s bank immediately.' mod='stripe_official'} {/if}<br>
                            {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Your customer will then receive the funds from a refund approximately 2-3 business days after the date on which the refund was initiated.' d='Modules.Stripeofficial.Refund'} {else} {l s='Your customer will then receive the funds from a refund approximately 2-3 business days after the date on which the refund was initiated.' mod='stripe_official'} {/if}<br>
                            {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Refunds take 5 to 10 days to appear on your cutomer’s statement.' d='Modules.Stripeofficial.Refund'} {else} {l s='Refunds take 5 to 10 days to appear on your cutomer’s statement.' mod='stripe_official'} {/if}
                        </i>
                    </p>
                </div>
            </div>
        </div>
        <div class="form-group partial-amount" style="display: none;">
          <label class="control-label col-lg-3 required">{if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Amount' d='Modules.Stripeofficial.Refund'} {else} {l s='Amount' mod='stripe_official'} {/if}</label>
            <div class="col-lg-9">
                <input type="text" name="STRIPE_REFUND_AMOUNT" id="refund_amount" value="" class="fixed-width-sm" size="20" required="required">
                <p class="help-block">
                    {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Please, enter an amount your want to refund' d='Modules.Stripeofficial.Refund'} {else} {l s='Please, enter an amount your want to refund' mod='stripe_official'} {/if}
                </p>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" value="1" id="configuration_form_submit_btn" name="submit_refund_id" class="btn btn-default pull-right button">
              <i class="process-icon-save"></i> {if isset($use_new_ps_translation) && $use_new_ps_translation} {l s='Request Refund' d='Modules.Stripeofficial.Refund'} {else} {l s='Request Refund' mod='stripe_official'} {/if}
            </button>
        </div>
    </div>
</form>
