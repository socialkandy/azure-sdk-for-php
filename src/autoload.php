<?php
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'pear2\\windowsazure\\core\\httpclient' => '/WindowsAzure/Core/HttpClient.php',
            'pear2\\windowsazure\\core\\ihttpclient' => '/WindowsAzure/Core/IHttpClient.php',
            'pear2\\windowsazure\\core\\invalidargumenttypeexception' => '/WindowsAzure/Core/InvalidArgumentTypeException.php',
            'pear2\\windowsazure\\core\\iservicefilter' => '/WindowsAzure/Core/IServiceFilter.php',
            'pear2\\windowsazure\\core\\iurl' => '/WindowsAzure/Core/IUrl.php',
            'pear2\\windowsazure\\core\\serviceexception' => '/WindowsAzure/Core/ServiceException.php',
            'pear2\\windowsazure\\core\\url' => '/WindowsAzure/Core/Url.php',
            'pear2\\windowsazure\\core\\windowsazureutilities' => '/WindowsAzure/Core/WindowsAzureUtilities.php',
            'pear2\\windowsazure\\resources' => '/WindowsAzure/Resources.php',
            'pear2\\windowsazure\\serviceruntime\\acquirecurrentstate' => '/WindowsAzure/ServiceRuntime/AcquireCurrentState.php',
            'pear2\\windowsazure\\serviceruntime\\channelnotavailableexception' => '/WindowsAzure/ServiceRuntime/ChannelNotAvailableException.php',
            'pear2\\windowsazure\\serviceruntime\\chunkedgoalstatedeserializer' => '/WindowsAzure/ServiceRuntime/ChunkedGoalStateDeserializer.php',
            'pear2\\windowsazure\\serviceruntime\\currentstate' => '/WindowsAzure/ServiceRuntime/CurrentState.php',
            'pear2\\windowsazure\\serviceruntime\\currentstatus' => '/WindowsAzure/ServiceRuntime/CurrentStatus.php',
            'pear2\\windowsazure\\serviceruntime\\fileinputchannel' => '/WindowsAzure/ServiceRuntime/FileInputChannel.php',
            'pear2\\windowsazure\\serviceruntime\\fileoutputchannel' => '/WindowsAzure/ServiceRuntime/FileOutputChannel.php',
            'pear2\\windowsazure\\serviceruntime\\goalstate' => '/WindowsAzure/ServiceRuntime/GoalState.php',
            'pear2\\windowsazure\\serviceruntime\\icurrentstateserializer' => '/WindowsAzure/ServiceRuntime/ICurrentStateSerializer.php',
            'pear2\\windowsazure\\serviceruntime\\igoalstatedeserializer' => '/WindowsAzure/ServiceRuntime/IGoalStateDeserializer.php',
            'pear2\\windowsazure\\serviceruntime\\iinputchannel' => '/WindowsAzure/ServiceRuntime/IInputChannel.php',
            'pear2\\windowsazure\\serviceruntime\\ioutputchannel' => '/WindowsAzure/ServiceRuntime/IOutputChannel.php',
            'pear2\\windowsazure\\serviceruntime\\iroleenvironmentchange' => '/WindowsAzure/ServiceRuntime/IRoleEnvironmentChange.php',
            'pear2\\windowsazure\\serviceruntime\\iroleenvironmentdatadeserializer' => '/WindowsAzure/ServiceRuntime/IRoleEnvironmentDataDeserializer.php',
            'pear2\\windowsazure\\serviceruntime\\iruntimeclient' => '/WindowsAzure/ServiceRuntime/IRuntimeClient.php',
            'pear2\\windowsazure\\serviceruntime\\iruntimeclientfactory' => '/WindowsAzure/ServiceRuntime/IRuntimeClientFactory.php',
            'pear2\\windowsazure\\serviceruntime\\iruntimecurrentstateclient' => '/WindowsAzure/ServiceRuntime/IRuntimeCurrentStateClient.php',
            'pear2\\windowsazure\\serviceruntime\\iruntimegoalstateclient' => '/WindowsAzure/ServiceRuntime/IRuntimeGoalStateClient.php',
            'pear2\\windowsazure\\serviceruntime\\protocol1runtimeclient' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeClient.php',
            'pear2\\windowsazure\\serviceruntime\\protocol1runtimeclientfactory' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeClientFactory.php',
            'pear2\\windowsazure\\serviceruntime\\protocol1runtimecurrentstateclient' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeCurrentStateClient.php',
            'pear2\\windowsazure\\serviceruntime\\protocol1runtimegoalstateclient' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeGoalStateClient.php',
            'pear2\\windowsazure\\serviceruntime\\releasecurrentstate' => '/WindowsAzure/ServiceRuntime/ReleaseCurrentState.php',
            'pear2\\windowsazure\\serviceruntime\\role' => '/WindowsAzure/ServiceRuntime/Role.php',
            'pear2\\windowsazure\\serviceruntime\\roleenvironment' => '/WindowsAzure/ServiceRuntime/RoleEnvironment.php',
            'pear2\\windowsazure\\serviceruntime\\roleenvironmentconfigurationsettingchange' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentConfigurationSettingChange.php',
            'pear2\\windowsazure\\serviceruntime\\roleenvironmentdata' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentData.php',
            'pear2\\windowsazure\\serviceruntime\\roleenvironmentnotavailableexception' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentNotAvailableException.php',
            'pear2\\windowsazure\\serviceruntime\\roleenvironmenttopologychange' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentTopologChange.php',
            'pear2\\windowsazure\\serviceruntime\\roleinstance' => '/WindowsAzure/ServiceRuntime/RoleInstance.php',
            'pear2\\windowsazure\\serviceruntime\\roleinstanceendpoint' => '/WindowsAzure/ServiceRuntime/RoleInstanceEndpoint.php',
            'pear2\\windowsazure\\serviceruntime\\roleinstancestatus' => '/WindowsAzure/ServiceRuntime/RoleInstanceStatus.php',
            'pear2\\windowsazure\\serviceruntime\\runtimeexception' => '/WindowsAzure/ServiceRuntime/RuntimeException.php',
            'pear2\\windowsazure\\serviceruntime\\runtimekernel' => '/WindowsAzure/ServiceRuntime/RuntimeKernel.php',
            'pear2\\windowsazure\\serviceruntime\\runtimeversionmanager' => '/WindowsAzure/ServiceRuntime/RuntimeVersionManager.php',
            'pear2\\windowsazure\\serviceruntime\\runtimeversionprotocolclient' => '/WindowsAzure/ServiceRuntime/RuntimeVersionProtocolClient.php',
            'pear2\\windowsazure\\serviceruntime\\xmlcurrentstateserializer' => '/WindowsAzure/ServiceRuntime/XmlCurrentStateSerializer.php',
            'pear2\\windowsazure\\serviceruntime\\xmlgoalstatedeserializer' => '/WindowsAzure/ServiceRuntime/XmlGoalStateDeserializer.php',
            'pear2\\windowsazure\\serviceruntime\\xmlroleenvironmentdatadeserializer' => '/WindowsAzure/ServiceRuntime/XmlRoleEnvironmentDataDeserializer.php',
            'pear2\\windowsazure\\services\\blob\\blobrestproxy' => '/WindowsAzure/Services/Blob/BlobRestProxy.php',
            'pear2\\windowsazure\\services\\blob\\blobservice' => '/WindowsAzure/Services/Blob/BlobService.php',
            'pear2\\windowsazure\\services\\blob\\blobsettings' => '/WindowsAzure/Services/Blob/BlobSettings.php',
            'pear2\\windowsazure\\services\\blob\\iblob' => '/WindowsAzure/Services/Blob/IBlob.php',
            'pear2\\windowsazure\\services\\blob\\models\\accesscondition' => '/WindowsAzure/Services/Blob/Models/AccessCondition.php',
            'pear2\\windowsazure\\services\\blob\\models\\accessconditionheadertype' => '/WindowsAzure/Services/Blob/Models/AccessConditionHeaderType.php',
            'pear2\\windowsazure\\services\\blob\\models\\accesspolicy' => '/WindowsAzure/Services/Blob/Models/AccessPolicy.php',
            'pear2\\windowsazure\\services\\blob\\models\\acquireleaseoptions' => '/WindowsAzure/Services/Blob/Models/AcquireLeaseOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\acquireleaseresult' => '/WindowsAzure/Services/Blob/Models/AcquireLeaseResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\blob' => '/WindowsAzure/Services/Blob/Models/Blob.php',
            'pear2\\windowsazure\\services\\blob\\models\\blobblocktype' => '/WindowsAzure/Services/Blob/Models/BlobBlockType.php',
            'pear2\\windowsazure\\services\\blob\\models\\blobprefix' => '/WindowsAzure/Services/Blob/Models/BlobPrefix.php',
            'pear2\\windowsazure\\services\\blob\\models\\blobproperties' => '/WindowsAzure/Services/Blob/Models/BlobProperties.php',
            'pear2\\windowsazure\\services\\blob\\models\\blobserviceoptions' => '/WindowsAzure/Services/Blob/Models/BlobServiceOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\blobtype' => '/WindowsAzure/Services/Blob/Models/BlobType.php',
            'pear2\\windowsazure\\services\\blob\\models\\blocklist' => '/WindowsAzure/Services/Blob/Models/BlockList.php',
            'pear2\\windowsazure\\services\\blob\\models\\commitblobblocksoptions' => '/WindowsAzure/Services/Blob/Models/CommitBlobBlocksOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\container' => '/WindowsAzure/Services/Blob/Models/Container.php',
            'pear2\\windowsazure\\services\\blob\\models\\containeracl' => '/WindowsAzure/Services/Blob/Models/ContainerACL.php',
            'pear2\\windowsazure\\services\\blob\\models\\containerproperties' => '/WindowsAzure/Services/Blob/Models/ContainerProperties.php',
            'pear2\\windowsazure\\services\\blob\\models\\createblobblockoptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobBlockOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\createbloboptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\createblobpagesoptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobPagesOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\createblobpagesresult' => '/WindowsAzure/Services/Blob/Models/CreateBlobPagesResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\createcontaineroptions' => '/WindowsAzure/Services/Blob/Models/CreateContainerOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\deletebloboptions' => '/WindowsAzure/Services/Blob/Models/DeleteBlobOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\getblobmetadataoptions' => '/WindowsAzure/Services/Blob/Models/GetBlobMetadataOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\getblobmetadataresult' => '/WindowsAzure/Services/Blob/Models/GetBlobMetadataResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\getbloboptions' => '/WindowsAzure/Services/Blob/Models/GetBlobOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\getblobpropertiesoptions' => '/WindowsAzure/Services/Blob/Models/GetBlobPropertiesOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\getblobpropertiesresult' => '/WindowsAzure/Services/Blob/Models/GetBlobPropertiesResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\getblobresult' => '/WindowsAzure/Services/Blob/Models/GetBlobResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\getcontaineraclresult' => '/WindowsAzure/Services/Blob/Models/GetContainerACLResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\getcontainerpropertiesresult' => '/WindowsAzure/Services/Blob/Models/GetContainerPropertiesResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\leasemode' => '/WindowsAzure/Services/Blob/Models/LeaseMode.php',
            'pear2\\windowsazure\\services\\blob\\models\\listblobblocksoptions' => '/WindowsAzure/Services/Blob/Models/ListBlobBlocksOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\listblobblocksresult' => '/WindowsAzure/Services/Blob/Models/ListBlobBlocksResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\listblobsoptions' => '/WindowsAzure/Services/Blob/Models/ListBlobsOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\listblobsresult' => '/WindowsAzure/Services/Blob/Models/ListBlobsResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\listcontainersoptions' => '/WindowsAzure/Services/Blob/Models/ListContainersOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\listcontainersresult' => '/WindowsAzure/Services/Blob/Models/ListContainersResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\listpageblobrangesoptions' => '/WindowsAzure/Services/Blob/Models/ListPageBlobRangesOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\listpageblobrangesresult' => '/WindowsAzure/Services/Blob/Models/ListPageBlobRangesResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\pagerange' => '/WindowsAzure/Services/Blob/Models/PageRange.php',
            'pear2\\windowsazure\\services\\blob\\models\\pagewriteoption' => '/WindowsAzure/Services/Blob/Models/PageWriteOption.php',
            'pear2\\windowsazure\\services\\blob\\models\\publicaccesstype' => '/WindowsAzure/Services/Blob/Models/PublicAccessType.php',
            'pear2\\windowsazure\\services\\blob\\models\\setblobmetadataoptions' => '/WindowsAzure/Services/Blob/Models/SetBlobMetadataOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\setblobmetadataresult' => '/WindowsAzure/Services/Blob/Models/SetBlobMetadataResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\setblobpropertiesoptions' => '/WindowsAzure/Services/Blob/Models/SetBlobPropertiesOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\setblobpropertiesresult' => '/WindowsAzure/Services/Blob/Models/SetBlobPropertiesResult.php',
            'pear2\\windowsazure\\services\\blob\\models\\setcontainermetadataoptions' => '/WindowsAzure/Services/Blob/Models/SetContainerMetadataOptions.php',
            'pear2\\windowsazure\\services\\blob\\models\\signedidentifier' => '/WindowsAzure/Services/Blob/Models/SignedIdentifier.php',
            'pear2\\windowsazure\\services\\core\\authentication\\sharedkeyauthscheme' => '/WindowsAzure/Services/Core/Authentication/SharedKeyAuthScheme.php',
            'pear2\\windowsazure\\services\\core\\authentication\\storageauthscheme' => '/WindowsAzure/Services/Core/Authentication/StorageAuthScheme.php',
            'pear2\\windowsazure\\services\\core\\authentication\\tablesharedkeyauthscheme' => '/WindowsAzure/Services/Core/Authentication/TableSharedKeyAuthScheme.php',
            'pear2\\windowsazure\\services\\core\\authentication\\tablesharedkeyliteauthscheme' => '/WindowsAzure/Services/Core/Authentication/TableSharedKeyLiteAuthScheme.php',
            'pear2\\windowsazure\\services\\core\\configuration' => '/WindowsAzure/Services/Core/Configuration.php',
            'pear2\\windowsazure\\services\\core\\filterableservice' => '/WindowsAzure/Services/Core/FilterableService.php',
            'pear2\\windowsazure\\services\\core\\filters\\datefilter' => '/WindowsAzure/Services/Core/Filters/DateFilter.php',
            'pear2\\windowsazure\\services\\core\\filters\\headersfilter' => '/WindowsAzure/Services/Core/Filters/HeadersFilter.php',
            'pear2\\windowsazure\\services\\core\\filters\\sharedkeyfilter' => '/WindowsAzure/Services/Core/Filters/SharedKeyFilter.php',
            'pear2\\windowsazure\\services\\core\\iservicebuilder' => '/WindowsAzure/Services/Core/IServiceBuilder.php',
            'pear2\\windowsazure\\services\\core\\models\\getservicepropertiesresult' => '/WindowsAzure/Services/Core/Models/GetServicePropertiesResult.php',
            'pear2\\windowsazure\\services\\core\\models\\logging' => '/WindowsAzure/Services/Core/Models/Logging.php',
            'pear2\\windowsazure\\services\\core\\models\\metrics' => '/WindowsAzure/Services/Core/Models/Metrics.php',
            'pear2\\windowsazure\\services\\core\\models\\retentionpolicy' => '/WindowsAzure/Services/Core/Models/RetentionPolicy.php',
            'pear2\\windowsazure\\services\\core\\models\\serviceproperties' => '/WindowsAzure/Services/Core/Models/ServiceProperties.php',
            'pear2\\windowsazure\\services\\core\\servicerestproxy' => '/WindowsAzure/Services/Core/ServiceRestProxy.php',
            'pear2\\windowsazure\\services\\core\\servicesbuilder' => '/WindowsAzure/Services/Core/ServicesBuilder.php',
            'pear2\\windowsazure\\services\\queue\\iqueue' => '/WindowsAzure/Services/Queue/IQueue.php',
            'pear2\\windowsazure\\services\\queue\\models\\createmessageoptions' => '/WindowsAzure/Services/Queue/Models/CreateMessageOptions.php',
            'pear2\\windowsazure\\services\\queue\\models\\createqueueoptions' => '/WindowsAzure/Services/Queue/Models/CreateQueueOptions.php',
            'pear2\\windowsazure\\services\\queue\\models\\getqueuemetadataresult' => '/WindowsAzure/Services/Queue/Models/GetQueueMetadataResult.php',
            'pear2\\windowsazure\\services\\queue\\models\\listmessagesoptions' => '/WindowsAzure/Services/Queue/Models/ListMessagesOptions.php',
            'pear2\\windowsazure\\services\\queue\\models\\listmessagesresult' => '/WindowsAzure/Services/Queue/Models/ListMessagesResult.php',
            'pear2\\windowsazure\\services\\queue\\models\\listqueuesoptions' => '/WindowsAzure/Services/Queue/Models/ListQueuesOptions.php',
            'pear2\\windowsazure\\services\\queue\\models\\listqueuesresult' => '/WindowsAzure/Services/Queue/Models/ListQueuesResult.php',
            'pear2\\windowsazure\\services\\queue\\models\\peekmessagesoptions' => '/WindowsAzure/Services/Queue/Models/PeekMessagesOptions.php',
            'pear2\\windowsazure\\services\\queue\\models\\peekmessagesresult' => '/WindowsAzure/Services/Queue/Models/PeekMessagesResult.php',
            'pear2\\windowsazure\\services\\queue\\models\\queue' => '/WindowsAzure/Services/Queue/Models/Queue.php',
            'pear2\\windowsazure\\services\\queue\\models\\queuemessage' => '/WindowsAzure/Services/Queue/Models/QueueMessage.php',
            'pear2\\windowsazure\\services\\queue\\models\\queueserviceoptions' => '/WindowsAzure/Services/Queue/Models/QueueServiceOptions.php',
            'pear2\\windowsazure\\services\\queue\\models\\updatemessageresult' => '/WindowsAzure/Services/Queue/Models/UpdateMessageResult.php',
            'pear2\\windowsazure\\services\\queue\\models\\windowsazurequeuemessage' => '/WindowsAzure/Services/Queue/Models/WindowsAzureQueueMessage.php',
            'pear2\\windowsazure\\services\\queue\\queuerestproxy' => '/WindowsAzure/Services/Queue/QueueRestProxy.php',
            'pear2\\windowsazure\\services\\queue\\queueservice' => '/WindowsAzure/Services/Queue/QueueService.php',
            'pear2\\windowsazure\\services\\queue\\queuesettings' => '/WindowsAzure/Services/Queue/QueueSettings.php',
            'pear2\\windowsazure\\services\\table\\itable' => '/WindowsAzure/Services/Table/ITable.php',
            'pear2\\windowsazure\\services\\table\\models\\deleteentityoptions' => '/WindowsAzure/Services/Table/Models/DeleteEntityOptions.php',
            'pear2\\windowsazure\\services\\table\\models\\edmtype' => '/WindowsAzure/Services/Table/Models/EdmType.php',
            'pear2\\windowsazure\\services\\table\\models\\entity' => '/WindowsAzure/Services/Table/Models/Entity.php',
            'pear2\\windowsazure\\services\\table\\models\\filters\\binaryfilter' => '/WindowsAzure/Services/Table/Models/Filters/BinaryFilter.php',
            'pear2\\windowsazure\\services\\table\\models\\filters\\constantfilter' => '/WindowsAzure/Services/Table/Models/Filters/ConstantFilter.php',
            'pear2\\windowsazure\\services\\table\\models\\filters\\filter' => '/WindowsAzure/Services/Table/Models/Filters/Filter.php',
            'pear2\\windowsazure\\services\\table\\models\\filters\\literalfilter' => '/WindowsAzure/Services/Table/Models/Filters/LitteralFilter.php',
            'pear2\\windowsazure\\services\\table\\models\\filters\\rawstringfilter' => '/WindowsAzure/Services/Table/Models/Filters/RawStringFilter.php',
            'pear2\\windowsazure\\services\\table\\models\\filters\\unaryfilter' => '/WindowsAzure/Services/Table/Models/Filters/UnaryFilter.php',
            'pear2\\windowsazure\\services\\table\\models\\getentityresult' => '/WindowsAzure/Services/Table/Models/GetEntityResult.php',
            'pear2\\windowsazure\\services\\table\\models\\insertentityresult' => '/WindowsAzure/Services/Table/Models/InsertEntityResult.php',
            'pear2\\windowsazure\\services\\table\\models\\property' => '/WindowsAzure/Services/Table/Models/Property.php',
            'pear2\\windowsazure\\services\\table\\models\\query' => '/WindowsAzure/Services/Table/Models/Query.php',
            'pear2\\windowsazure\\services\\table\\models\\queryentitiesoptions' => '/WindowsAzure/Services/Table/Models/QueryEntitiesOptions.php',
            'pear2\\windowsazure\\services\\table\\models\\queryentitiesresult' => '/WindowsAzure/Services/Table/Models/QueryEntitiesResult.php',
            'pear2\\windowsazure\\services\\table\\models\\querytablesoptions' => '/WindowsAzure/Services/Table/Models/QueryTablesOptions.php',
            'pear2\\windowsazure\\services\\table\\models\\querytablesresult' => '/WindowsAzure/Services/Table/Models/QueryTablesResult.php',
            'pear2\\windowsazure\\services\\table\\models\\tableserviceoptions' => '/WindowsAzure/Services/Table/Models/TableServiceOptions.php',
            'pear2\\windowsazure\\services\\table\\models\\updateentityresult' => '/WindowsAzure/Services/Table/Models/UpdateEntityResult.php',
            'pear2\\windowsazure\\services\\table\\tablerestproxy' => '/WindowsAzure/Services/Table/TableRestProxy.php',
            'pear2\\windowsazure\\services\\table\\tableservice' => '/WindowsAzure/Services/Table/TableService.php',
            'pear2\\windowsazure\\services\\table\\tablesettings' => '/WindowsAzure/Services/Table/TableSettings.php',
            'pear2\\windowsazure\\services\\table\\utilities\\atomreaderwriter' => '/WindowsAzure/Services/Table/Utilities/AtomReaderWriter.php',
            'pear2\\windowsazure\\services\\table\\utilities\\iatomreaderwriter' => '/WindowsAzure/Services/Table/Utilities/IAtomReaderWriter.php',
            'pear2\\windowsazure\\utilities' => '/WindowsAzure/Utilities.php',
            'pear2\\windowsazure\\validate' => '/WindowsAzure/Validate.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
