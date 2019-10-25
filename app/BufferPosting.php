<?php

namespace Bulkly;

use Illuminate\Database\Eloquent\Model;

class BufferPosting extends Model
{
   public function groupInfo()
    {
        return $this->hasOne('Bulkly\SocialPostGroups','id', 'group_id');
    }
   public function accountInfo()
    {
        return $this->hasOne('Bulkly\SocialAccounts','id', 'account_id');
    }
    public function post()
    {
    	return $this->hasOne('Bulkly\SocialPosts','id', 'post_id');
    }
}
