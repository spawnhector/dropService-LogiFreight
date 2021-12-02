<div>
    <button type="button" class="btn btn-primary mr-3">Notifications <span class="badge badge-pill badge-success">0</span> <span class="sr-only">unread messages</span></button>
    <div class="btn-group mr-2 ">
        <span type="button" class="btn btn-primary" style="display: flex">
            <span class="btn btn-xs btn-circle btn-icon-only btn-soft">
                <span class="fa fa-user"></span>
            </span>
            <p class="font-small m-0 pl-2">
                @if ($member && $member['name'])
                    {{$member['name']}}
                @else
                    User
                @endif
            </p>
        </span> 
        <span type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-target="drp2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-angle-down dropdown-arrow" ></span> 
            <span class="sr-only">Toggle Dropdown</span>
        </span>
        <div class="dropdown-menu dropdown-menu-md" id="drp1" aria-labelledby="dropdownMenuButton">
            <h2 class="h6 dropdown-header">Hi, 
                @if ($member && $member['name'])
                    {{$member['name']}}
                @else
                    User
                @endif
            </h2>
            @if ($member && $member['profile_prog'] == 100)
                <a class="dropdown-item" href="#">My profile</a> 
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
            @endif
            <a class="dropdown-item" wire:click='logout'>
                <span class="fas fa-sign-out-alt mr-2"></span>Sign out
            </a>
        </div>
    </div>
</div>
