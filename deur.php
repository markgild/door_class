<?php 
    class Deur {
        private bool $opSlot;
        private bool $deuropening;
        public string $deurNaam;

        public function __construct(string $deurNaam)
        {
            $this->opSlot = true; // De deur is op slot en moet worden geopend met een sleutel
            $this->deuropening = false; // De deur is dicht en moet met de klink worden opengemaakt
            $this->deurNaam = $deurNaam; // De deur moet nog de opgegeven naam krijgen (uit de parameter)
        }
        
        public function sleutelGebruiken(string $richting): string {
            switch($richting) {
                case "links":
                    // ontgrendelen
                    $this->opSlot = false;
                    return "Deur is ontgrendeld.";
                    break;
                case "rechts":
                    // vergrendelen
                    $this->opSlot = true;
                    return "Deur is vergrendeld.";
                    break;
                default:
                    // wat kun je nog meer doen met een sleutel/slot? 🤔
                    return "Onbekende richting.";
                    break;
            }
        }
        
        public function deurOpenen(): string {
            // Niet mogelijk als de deur op slot is!
            if ($this->opSlot) {
                return "Deur is nog op slot en kan niet openen!";
            }
            $this->deuropening = true;
            return "Deur is geopend!";
        }
        
        public function doorDeurLopen(): string {
            // Alleen wanneer de deur ontgrendeld en open is, kun je door de deur lopen.
            // Anders moet er een foutmelding worden weergegeven.

            if ($this->opSlot || !$this->deuropening) {
                return "Je stoot tegen de " . $this->deurNaam . "!";
            }

            return "Je bent in je huiskamer!";
        }
        
    }

?>