<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtDeliveryProfile extends EtBaseClass
{
    public $Name; // String
    public $Description; // String
    public $SourceAddressType; // EtDeliveryProfileSourceAddressTypeEnum
    public $PrivateIP; // EtPrivateIP
    public $DomainType; // EtDeliveryProfileDomainTypeEnum
    public $PrivateDomain; // EtPrivateDomain
    public $HeaderSalutationSource; // EtSalutationSourceEnum
    public $HeaderContentArea; // EtContentArea
    public $FooterSalutationSource; // EtSalutationSourceEnum
    public $FooterContentArea; // EtContentArea
}

