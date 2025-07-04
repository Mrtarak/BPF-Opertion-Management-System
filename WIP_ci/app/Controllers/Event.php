<?php

namespace App\Controllers;
use App\Models\EventTypeModel;
use App\Models\EventDetailModel;

class Event extends BaseController
{
    protected $eventTypeModel;
    protected $eventModel;

    public function __construct()
    {
        $this->eventTypeModel = new EventTypeModel();
        $this->eventModel = new EventDetailModel();
        helper(['form']);
    }

    // ----------- EVENT TYPES ------------
    public function eventTypes()
    {
        $data['types'] = $this->eventTypeModel->findAll();
        return view('ManageEvents/event_type', $data);
    }

    public function addEventType()
    {
        return view('ManageEvents/add_event_type');
    }

    public function saveEventType()
    {
        $this->eventTypeModel->insert($this->request->getPost());
        return redirect()->to('events/types')->with('success', 'Event Type Added');
    }

    public function editEventType($id)
    {
        $data['type'] = $this->eventTypeModel->find($id);
        return view('ManageEvents/edit_event_type', $data);
    }

    public function updateEventType($id)
    {
        $this->eventTypeModel->update($id, $this->request->getPost());
        return redirect()->to('events/types')->with('success', 'Event Type Updated');
    }

    public function deleteEventType($id)
    {
        $this->eventTypeModel->delete($id);
        return redirect()->to('events/types')->with('success', 'Event Type Deleted');
    }

    // ----------- EVENT DETAILS ------------
    public function eventList()
    {
        $data['events'] = $this->eventModel
            ->select('event_detail.*, eventtype_m.Event_TypeName')
            ->join('eventtype_m', 'eventtype_m.EventType_Id = event_detail.EventType_Id')
            ->findAll();

        return view('ManageEvents/events', $data);
    }

    public function addEvent()
    {
        $data['types'] = $this->eventTypeModel->findAll();
        return view('ManageEvents/add_events', $data);
    }

    public function saveEvent()
    {
        $this->eventModel->insert($this->request->getPost());
        return redirect()->to('events/list')->with('success', 'Event Created');
    }

    public function editEvent($id)
    {
        $data['event'] = $this->eventModel->find($id);
        $data['types'] = $this->eventTypeModel->findAll();
        return view('ManageEvents/edit_events', $data);
    }

    public function updateEvent($id)
    {
        $this->eventModel->update($id, $this->request->getPost());
        return redirect()->to('events/list')->with('success', 'Event Updated');
    }

    public function deleteEvent($id)
    {
        $this->eventModel->delete($id);
        return redirect()->to('events/list')->with('success', 'Event Deleted');
    }
}
