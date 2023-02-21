<?php

namespace App\Http\Requests\Invoices;

use App\Models\Attachment;
use App\Models\Invoice;
use App\Traits\AttachmentTrait;
use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UpdateRequest extends FormRequest
{
    use AttachmentTrait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function run($id){
        try {
            //this code to calculate the value of total & value_vat variables because of security reasons
            $Amount_Commission2 = $this->amount_commission - $this->discount;
            $value_vat = $Amount_Commission2 * floatval($this->rate_vat) / 100;
            $total = number_format(floatval($value_vat + $Amount_Commission2),2);


            $invoice = Invoice::find($id);
            if($this->filled('invoice_date'))
                $invoice->invoice_date = $this->invoice_date;
            if($this->filled('due_date'))
                $invoice->due_date = $this->due_date;
            if($this->filled('section_id'))
                $invoice->section_id = intval($this->section_id) ;
            if($this->filled('product_id'))
                $invoice->product_id = intval($this->product_id);
            if($this->filled('discount'))
                $invoice->discount = intval($this->discount);
            if($this->filled('rate_vat'))
                $invoice->rate_vat = $this->rate_vat;
            if($this->filled('value_vat'))
                $invoice->value_vat = $value_vat;
            if($this->filled('amount_collection'))
                $invoice->amount_collection = intval($this->amount_collection);
            if($this->filled('amount_commission'))
                $invoice->amount_commission = intval($this->amount_commission);
            if($this->filled('total'))
                $invoice->total = intval($total);
            if($this->filled('note'))
                $invoice->note = $this->note;
            if(!$invoice->save())
                return redirect()->back()->withErrors(__('failed_messages.invoices.edit'));
            else
                Session::put('invoices_success_msg',__('success_messages.invoices.edit'));
            if ($files = $this->file('pic')) {
                    $attachmentName = $this->save_attachment($files, "assets/img/invoices/$invoice->invoice_number");
                    $attachment = new Attachment();
                    $attachment->invoice_id = $invoice->id;
                    $attachment->file_name = $attachmentName;
                    $attachment->save();
            }
                return redirect()->route('invoices.index');
        }catch (Exception $ex){
            return redirect()->route('invoices.index')->withErrors($ex->getMessage());
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'invoice_date'=>'date|date_format:Y-m-d',
            'due_date'=>'date|date_format:Y-m-d|after_or_equal:invoice_date',
            'section_id'=>'exists:sections,id|numeric|min:1',
            'product_id'=>'exists:products,id|numeric|min:1',
            'discount' => 'numeric|lte:amount_commission|min:0',
            'amount_commission' => 'numeric|lte:amount_collection|min:1',
            'amount_collection'=>'numeric|max:99999999|min:1',
            'note' => 'nullable|string|max:255',
            'rate_vat'=>'in:5%,10%',
            'pic'=>'mimes:pdf,jpeg,jpg,png|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'invoice_number.unique'=>__('failed_messages.invoices.invoice_number.unique'),
            'invoice_number.min'=>__('failed_messages.invoices.invoice_number.min'),
            'invoice_number.max'=>__('failed_messages.invoices.invoice_number.max'),
            'invoice_number.numeric'=>__('failed_messages.invoices.invoice_number.numeric'),

            'invoice_date.date'=>__('failed_messages.invoices.invoice_date.date'),
            'invoice_date.date_format'=>__('failed_messages.invoices.invoice_date.date_format'),

            'due_date.date'=>__('failed_messages.invoices.due_date.date'),
            'due_date.date_format'=>__('failed_messages.invoices.due_date.date_format'),
            'due_date.after_or_equal'=>__('failed_messages.invoices.due_date.after_or_equal'),

            'section_id.exists'=>__('failed_messages.invoices.section_id.exists'),
            'section_id.numeric'=>__('failed_messages.invoices.section_id.numeric'),
            'section_id.min'=>__('failed_messages.invoices.section_id.min'),

            'product_id.exists'=>__('failed_messages.invoices.product_id.exists'),
            'product_id.numeric'=>__('failed_messages.invoices.product_id.numeric'),
            'product_id.min'=>__('failed_messages.invoices.product_id.min'),

            'discount.numeric'=>__('failed_messages.invoices.discount.numeric'),
            'discount.lte'=>__('failed_messages.invoices.discount.lte'),
            'discount.min'=>__('failed_messages.invoices.discount.min'),

            'amount_commission.numeric'=>__('failed_messages.invoices.amount_commission.numeric'),
            'amount_commission.lte'=>__('failed_messages.invoices.amount_commission.lte'),
            'amount_commission.min'=>__('failed_messages.invoices.amount_commission.min'),

            'amount_collection.numeric'=>__('failed_messages.invoices.amount_collection.numeric'),
            'amount_collection.max'=>__('failed_messages.invoices.amount_collection.max'),
            'amount_collection.min'=>__('failed_messages.invoices.amount_collection.min'),

            'note.string'=>__('failed_messages.invoices.note.string'),
            'note.max'=>__('failed_messages.invoices.note.max'),

            'rate_vat.in'=>__('failed_messages.invoices.rate_vat.in'),

            'pic.mimes'=>__('failed_messages.invoices.pic.mimes'),
            'pic.max'=>__('failed_messages.invoices.pic.max'),
        ];
    }
}
