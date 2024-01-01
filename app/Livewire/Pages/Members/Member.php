<?php

namespace App\Livewire\Pages\Members;
use App\Exports\MemberExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Member extends Component
{



    use WithPagination;

   
    public $fname;
   
    public $order;
    public $expenses=0;
    public $prepaid = 0;
    public $materials;
    public $order_name;
   
   
    public $work_cost = 0;
    public $phone = '255';
    

    public $search;

    public $selectuserID;

   

  
    
 

    protected $rules = [
        'fname' => 'required',
       'order' => 'required',
       'work_cost' => 'required',
        'expenses' => 'required',
        'prepaid' => 'required',
        'materials' => 'required',
        'phone' => 'sometimes',
        'order_name' => 'required'

        
    ];

    public function save()
{
    sleep(2);

    $validated = $this->validate();

    $validated['prepaid'] = (float) str_replace(',', '', $validated['prepaid']);
    $validated['work_cost'] = (float) str_replace(',', '', $validated['work_cost']);
    $validated['expenses'] = (float) str_replace(',', '', $validated['expenses'] ?? 0);
    $validated['profit'] = $validated['work_cost'] - $validated['expenses'];

    // dd($validated['profit']);
    Customer::create($validated);

    $this->reset('fname', 'work_cost', 'phone', 'prepaid', 'expenses', 'order_name', 'materials', 'order');

    Toaster::success('Order created successfully!');
}


    
public function changeDelete($memberid)
{
      $this->selectuserID=$memberid;
}
public function deleteUser()
{
    if($this->selectuserID == 0)
    {
        return redirect()->back();
    }

    $user = Customer::findOrFail($this->selectuserID);
    $user->delete();
    $this->selectuserID =0;

    Toaster::success('umefanikiwa kufuta order');
}

public $showModal = false;

public $member;

public function edit($id)
{
    $this->member = Customer::find($id);
    $this->fname = $this->member->fname;
    $this->phone = $this->member->phone;
    $this->order = $this->member->order;
    $this->work_cost = $this->member->work_cost;
    $this->prepaid = $this->member->prepaid;
    $this->expenses = $this->member->expenses;
    $this->materials = $this->member->materials;


    
}

public function update()
{
   
    $this->prepaid = str_replace(',', '', $this->prepaid);
    $this->work_cost = str_replace(',', '', $this->work_cost);
    $this->expenses = str_replace(',', '', $this->expenses);
    $this->profit = $this->work_cost - $this->expenses;

    $this->member->update([
        'fname' => $this->fname,
        'phone' => $this->phone,
        'order' => $this->order,
        'prepaid' => $this->prepaid,
        'expenses' => $this->expenses,
        'materials' => $this->materials,
        'work_cost' => $this->work_cost,
        'profit' =>$this->profit,
    ]);

    $this->dispatch('member-updated', ['memberId' => $this->member->id]);
    $this->reset();
    

    Toaster::success('order updated successfully');
}


public function viewPdf()
{
    $members =Customer::all();

    $pdf = Pdf::loadView('members',['members'=>$members])
    ->setPaper('A4','Landscape');
    return response()->streamDownload(function () use ($pdf) {
        echo $pdf->stream();
        }, 'members.pdf');
}

public function DownloadX()
{
   
    return Excel::download(new MemberExport, 'members.xlsx');
    
}








    public function render()
    {

        $members = Customer::latest()
            ->where('fname', 'like', "%{$this->search}%")
            ->orWhere('fname', 'like', "%{$this->search}%")
            ->paginate(3);
        return view('livewire.pages.member', ['members' => $members]);
    }
}
