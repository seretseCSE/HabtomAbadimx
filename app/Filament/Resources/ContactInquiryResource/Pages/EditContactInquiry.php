<?php

namespace App\Filament\Resources\ContactInquiryResource\Pages;

use App\Filament\Resources\ContactInquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactInquiry extends EditRecord
{
    protected static string $resource = ContactInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('reply')
                ->label('Reply by Email')
                ->icon('heroicon-o-paper-airplane')
                ->color('success')
                ->url(fn (): string => "mailto:{$this->record->email}?subject=Re: {$this->record->subject}&body=Hi {$this->record->name},%0D%0A%0D%0AThank you for your inquiry. We have received your message and will get back to you shortly.%0D%0A%0D%0ABest regards,%0D%0AHabtom Abadi Import Export Team")
                ->openUrlInNewTab(),
            Actions\DeleteAction::make(),
        ];
    }
}
