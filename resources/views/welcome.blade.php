@php
    $notifications = [
        (object) [
            'title' => 'Your call has been confirmed.',
            'description' => '1 hour ago',
        ],
        (object) [
            'title' => 'You have a new message!',
            'description' => '1 hour ago',
        ],
        (object) [
            'title' => 'Your subscription is expiring soon!',
            'description' => '2 hours ago',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/luvi-ui.css', 'resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <x-card class="w-[380px]">
        <x-card.header>
            <x-card.title>Notifications</x-card.title>
            <x-card.description>You have 3 unread messages.</x-card.description>
        </x-card.header>
        <x-card.content class="grid gap-4">
            <div class=" flex items-center space-x-4 rounded-md border p-4">
                <x-lucide-bell class="size-4" />
                <div class="flex-1 space-y-1">
                    <p class="text-sm font-medium leading-none">
                        Push Notifications
                    </p>
                    <p class="text-sm text-muted-foreground">
                        Send notifications to device.
                    </p>
                </div>
                <x-switch />
            </div>
            <div>
                @foreach ($notifications as $notification)
                    <div class="mb-4 grid grid-cols-[25px_1fr] items-start pb-4 last:mb-0 last:pb-0">
                        <span class="flex h-2 w-2 translate-y-1 rounded-full bg-sky-500"></span>
                        <div class="space-y-1">
                            <p class="text-sm font-medium leading-none">
                                {{ $notification->title }}
                            </p>
                            <p class="text-sm text-muted-foreground">
                                {{ $notification->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-card.content>
        <x-card.footer>
            <x-button class="w-full">
                <x-lucide-check class="mr-2 h-4 w-4" /> Mark all as read
            </x-button>
        </x-card.footer>
    </x-card>

    <x-form>
        <x-form.item>
            <x-form.label>Username</x-form.label>
            <x-input
                x-form:control
                placeholder="shadcn"
            />
            <x-form.description>
                This is your public display name. It can be your real name or a
                pseudonym. You can only change this once every 30 days.
            </x-form.description>
            <x-form.message />
        </x-form.item>
    
    
        <x-form.item>
            <x-form.label>Email</x-form.label>
            <x-select x-form:control>
                <option
                    value="Select a verified email to display"
                    disabled
                >
                    Select a verified email to display </option>
                <option value="m@example.com">m@example.com</option>
                <option value="m@google.com">m@google.com</option>
                <option value="m@support.com">m@support.com</option>
            </x-select>
            <x-form.description>
                You can manage verified email addresses in your
                <x-link href="/examples/forms">email settings</x-link>.
            </x-form.description>
            <x-form.message />
        </x-form.item>
    
        <x-form.item>
            <x-form.label>Bio</x-form.label>
            <x-textarea
                wire:model="bio"
                x-form:control
                placeholder="Tell us a little bit about yourself"
                class="resize-none"
            />
            <x-form.description>
                You can <span>@mention</span> other users and organizations to
                link to them.
            </x-form.description>
            <x-form.message />
        </x-form.item>
    
        <x-button type="submit">Update profile</x-button>
    </x-form>
    
</body>
</html>
