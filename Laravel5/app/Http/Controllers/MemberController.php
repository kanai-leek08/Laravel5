<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMemberRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MemberRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Debugbar;

class MemberController extends AppBaseController
{

	/** @var  MemberRepository */
	private $memberRepository;

	function __construct(MemberRepository $memberRepo)
	{
		$this->memberRepository = $memberRepo;
		$this->middleware('route');
		$this->middleware('only', ['only' => ['index']]);
	}

	/**
	 * Display a listing of the Member.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	  $input = $request->all();
		Debugbar::info(__FILE__ . ':' . __LINE__ . '▼リクエストパラメータはActionの引数で受け取れる(メソッドインジェクション)');
		Debugbar::warning($input);

		$result = $this->memberRepository->search($input);

		$members = $result[0];

		$attributes = $result[1];

		return view('members.index')
		    ->with('members', $members)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Member.
	 *
	 * @return Response
	 */
	public function create()
	{
		Debugbar::info(__FILE__ . ':' . __LINE__ .  '▼パラメータvalidation:Controllerのメソッド(storeやupdate)にRequestクラスをMIすれば自動でrulesのvalidateが実行される。');
		return view('members.create');
	}

	/**
	 * Store a newly created Member in storage.
	 *
	 * @param CreateMemberRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMemberRequest $request)
	{
    $input = $request->all();

		$member = $this->memberRepository->store($input);

		Flash::message('Member saved successfully.');

		return redirect(route('members.index'));
	}

	/**
	 * Display the specified Member.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$member = $this->memberRepository->findMemberById($id);

		if(empty($member))
		{
			Flash::error('Member not found');
			return redirect(route('members.index'));
		}

		return view('members.show')->with('member', $member);
	}

	/**
	 * Show the form for editing the specified Member.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		Debugbar::info(__FILE__ . ':' . __LINE__ .  '▼パラメータvalidation:Controllerのメソッド(storeやupdate)にRequestクラスをMIすれば自動でrulesのvalidateが実行される。');
		$member = $this->memberRepository->findMemberById($id);

		if(empty($member))
		{
			Flash::error('Member not found');
			return redirect(route('members.index'));
		}

		return view('members.edit')->with('member', $member);
	}

	/**
	 * Update the specified Member in storage.
	 *
	 * @param  int    $id
	 * @param CreateMemberRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMemberRequest $request)
	{
		$member = $this->memberRepository->findMemberById($id);

		if(empty($member))
		{
			Flash::error('Member not found');
			return redirect(route('members.index'));
		}

		$member = $this->memberRepository->update($member, $request->all());

		Flash::message('Member updated successfully.');

		return redirect(route('members.index'));
	}

	/**
	 * Remove the specified Member from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$member = $this->memberRepository->findMemberById($id);

		if(empty($member))
		{
			Flash::error('Member not found');
			return redirect(route('members.index'));
		}

		$member->delete();

		Flash::message('Member deleted successfully.');

		return redirect(route('members.index'));
	}

}
