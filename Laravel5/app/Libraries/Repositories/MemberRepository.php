<?php

namespace App\Libraries\Repositories;


use App\Models\Member;
use Illuminate\Support\Facades\Schema;

class MemberRepository
{

	/**
	 * Returns all Members
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Member::all();
	}

	public function search($input)
    {
        $query = Member::query();

        $columns = Schema::getColumnListing('members');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Member into database
	 *
	 * @param array $input
	 *
	 * @return Member
	 */
	public function store($input)
	{
		return Member::create($input);
	}

	/**
	 * Find Member by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Member
	 */
	public function findMemberById($id)
	{
		return Member::find($id);
	}

	/**
	 * Updates Member into database
	 *
	 * @param Member $member
	 * @param array $input
	 *
	 * @return Member
	 */
	public function update($member, $input)
	{
		$member->fill($input);
		$member->save();

		return $member;
	}
}