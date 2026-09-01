<?php

declare(strict_types=1);

namespace Liberu\CRM\SalesEngagement\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 */
final class EngagementSequence extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_engagement_sequences';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['throttle' => 'array', 'stop_rules' => 'array', 'experiment' => 'array'];
    }
}
