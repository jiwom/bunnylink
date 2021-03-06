<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rabbit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'org_id',
        'tag_id',
        'breeding_id',
        'cage_no',
        'category',
        'breed',
        'type',
        'color',
        'dob',
        'gender',
        'status',
        'home_breed',
        'notes',
        'avatar',
        'inserted_by',
        'updated_by',
    ];

    public function idGenerator()
    {
        $year    = now()->format('y');
        $no_tags = $this->select(['id', 'tag_id', 'org_id'])
                        ->where('org_id', Members::getOrgID(auth()->id()))
                        ->whereNull('tag_id')
                        ->get()
                        ->toArray();

        $with_tags = $this->select(['id', 'tag_id'])
                          ->where('org_id', Members::getOrgID(auth()->id()))
                          ->where('tag_id', 'LIKE', "R-{$year}%")
                          ->whereNotNull('tag_id')
                          ->count();

        foreach ($no_tags as $key => $value) {
            $with_tags++;
            $hold = substr(1000000 + $with_tags, 1);
            $this->where('id', $value['id'])->update([
                'tag_id' => "R-{$year}{$value['org_id']}{$hold}",
            ]);
        }
    }

    public function rabbitStatus()
    {
        return $this->hasOne(RabbitStatus::class, 'name', 'status');
    }

    public function myDoes()
    {
        return $this->query()
                     ->select(['id', 'tag_id'])
                     ->where('gender', 'doe')
                     ->where('org_id', Members::getOrgID(auth()->id()));
    }

    public function myBucks()
    {
        return $this->query()
                     ->select(['id', 'tag_id'])
                     ->where('gender', 'buck')
                     ->where('org_id', Members::getOrgID(auth()->id()));
    }
}
