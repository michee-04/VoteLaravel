<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $candidate_id
 * @property string $candidatePicture
 * @property string $candidateName
 * @property string $description
 * @property int $election_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Elections $Election
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Votes> $Votes
 * @property-read int|null $votes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereCandidateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereCandidatePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereElectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidates whereUpdatedAt($value)
 */
	class Candidates extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $election_id
 * @property string $electionPicture
 * @property string $electionName
 * @property string $startDate
 * @property string $endDate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Candidates> $candidates
 * @property-read int|null $candidates_count
 * @method static \Illuminate\Database\Eloquent\Builder|Elections newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Elections newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Elections query()
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereElectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereElectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereElectionPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elections whereUpdatedAt($value)
 */
	class Elections extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property mixed $password
 * @property string $statusVote
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Votes> $Votes
 * @property-read int|null $votes_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatusVote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $vote_id
 * @property int $user_id
 * @property int $candidate_id
 * @property int $nbvotes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Candidates $Candidate
 * @property-read \App\Models\User $User
 * @method static \Illuminate\Database\Eloquent\Builder|Votes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Votes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Votes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereNbvotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereVoteId($value)
 */
	class Votes extends \Eloquent {}
}

