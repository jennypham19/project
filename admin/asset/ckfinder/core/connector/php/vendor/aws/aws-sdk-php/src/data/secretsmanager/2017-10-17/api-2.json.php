<?php
// This file was auto-generated from sdk-root/src/data/secretsmanager/2017-10-17/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-10-17', 'endpointPrefix' => 'secretsmanager', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Secrets Manager', 'serviceId' => 'Secrets Manager', 'signatureVersion' => 'v4', 'signingName' => 'secretsmanager', 'targetPrefix' => 'secretsmanager', 'uid' => 'secretsmanager-2017-10-17', ], 'operations' => [ 'CancelRotateSecret' => [ 'name' => 'CancelRotateSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CancelRotateSecretRequest', ], 'output' => [ 'shape' => 'CancelRotateSecretResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'CreateSecret' => [ 'name' => 'CreateSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateSecretRequest', ], 'output' => [ 'shape' => 'CreateSecretResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'EncryptionFailure', ], [ 'shape' => 'ResourceExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'PreconditionNotMetException', ], ], ], 'DeleteResourcePolicy' => [ 'name' => 'DeleteResourcePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteResourcePolicyRequest', ], 'output' => [ 'shape' => 'DeleteResourcePolicyResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'DeleteSecret' => [ 'name' => 'DeleteSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteSecretRequest', ], 'output' => [ 'shape' => 'DeleteSecretResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'DescribeSecret' => [ 'name' => 'DescribeSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeSecretRequest', ], 'output' => [ 'shape' => 'DescribeSecretResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'GetRandomPassword' => [ 'name' => 'GetRandomPassword', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetRandomPasswordRequest', ], 'output' => [ 'shape' => 'GetRandomPasswordResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'GetResourcePolicy' => [ 'name' => 'GetResourcePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourcePolicyRequest', ], 'output' => [ 'shape' => 'GetResourcePolicyResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'GetSecretValue' => [ 'name' => 'GetSecretValue', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetSecretValueRequest', ], 'output' => [ 'shape' => 'GetSecretValueResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'DecryptionFailure', ], [ 'shape' => 'InternalServiceError', ], ], ], 'ListSecretVersionIds' => [ 'name' => 'ListSecretVersionIds', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListSecretVersionIdsRequest', ], 'output' => [ 'shape' => 'ListSecretVersionIdsResponse', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'ListSecrets' => [ 'name' => 'ListSecrets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListSecretsRequest', ], 'output' => [ 'shape' => 'ListSecretsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'PutResourcePolicy' => [ 'name' => 'PutResourcePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutResourcePolicyRequest', ], 'output' => [ 'shape' => 'PutResourcePolicyResponse', ], 'errors' => [ [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'PutSecretValue' => [ 'name' => 'PutSecretValue', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutSecretValueRequest', ], 'output' => [ 'shape' => 'PutSecretValueResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'EncryptionFailure', ], [ 'shape' => 'ResourceExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'RestoreSecret' => [ 'name' => 'RestoreSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RestoreSecretRequest', ], 'output' => [ 'shape' => 'RestoreSecretResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'RotateSecret' => [ 'name' => 'RotateSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RotateSecretRequest', ], 'output' => [ 'shape' => 'RotateSecretResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalServiceError', ], ], ], 'UpdateSecret' => [ 'name' => 'UpdateSecret', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateSecretRequest', ], 'output' => [ 'shape' => 'UpdateSecretResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'EncryptionFailure', ], [ 'shape' => 'ResourceExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'PreconditionNotMetException', ], ], ], 'UpdateSecretVersionStage' => [ 'name' => 'UpdateSecretVersionStage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateSecretVersionStageRequest', ], 'output' => [ 'shape' => 'UpdateSecretVersionStageResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServiceError', ], ], ], ], 'shapes' => [ 'AutomaticallyRotateAfterDaysType' => [ 'type' => 'long', 'max' => 1000, 'min' => 1, ], 'BooleanType' => [ 'type' => 'boolean', ], 'CancelRotateSecretRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], ], ], 'CancelRotateSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], ], ], 'ClientRequestTokenType' => [ 'type' => 'string', 'max' => 64, 'min' => 32, ], 'CreateSecretRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'NameType', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenType', 'idempotencyToken' => true, ], 'Description' => [ 'shape' => 'DescriptionType', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyIdType', ], 'SecretBinary' => [ 'shape' => 'SecretBinaryType', ], 'SecretString' => [ 'shape' => 'SecretStringType', ], 'Tags' => [ 'shape' => 'TagListType', ], ], ], 'CreateSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], ], ], 'CreatedDateType' => [ 'type' => 'timestamp', ], 'DecryptionFailure' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'DeleteResourcePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], ], ], 'DeleteResourcePolicyResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'NameType', ], ], ], 'DeleteSecretRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'RecoveryWindowInDays' => [ 'shape' => 'RecoveryWindowInDaysType', 'box' => true, ], 'ForceDeleteWithoutRecovery' => [ 'shape' => 'BooleanType', 'box' => true, ], ], ], 'DeleteSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'DeletionDate' => [ 'shape' => 'DeletionDateType', 'box' => true, ], ], ], 'DeletedDateType' => [ 'type' => 'timestamp', ], 'DeletionDateType' => [ 'type' => 'timestamp', ], 'DescribeSecretRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], ], ], 'DescribeSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'Description' => [ 'shape' => 'DescriptionType', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyIdType', ], 'RotationEnabled' => [ 'shape' => 'RotationEnabledType', 'box' => true, ], 'RotationLambdaARN' => [ 'shape' => 'RotationLambdaARNType', ], 'RotationRules' => [ 'shape' => 'RotationRulesType', ], 'LastRotatedDate' => [ 'shape' => 'LastRotatedDateType', 'box' => true, ], 'LastChangedDate' => [ 'shape' => 'LastChangedDateType', 'box' => true, ], 'LastAccessedDate' => [ 'shape' => 'LastAccessedDateType', 'box' => true, ], 'DeletedDate' => [ 'shape' => 'DeletedDateType', 'box' => true, ], 'Tags' => [ 'shape' => 'TagListType', ], 'VersionIdsToStages' => [ 'shape' => 'SecretVersionsToStagesMapType', ], ], ], 'DescriptionType' => [ 'type' => 'string', 'max' => 2048, ], 'EncryptionFailure' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExcludeCharactersType' => [ 'type' => 'string', 'max' => 4096, 'min' => 0, ], 'ExcludeLowercaseType' => [ 'type' => 'boolean', ], 'ExcludeNumbersType' => [ 'type' => 'boolean', ], 'ExcludePunctuationType' => [ 'type' => 'boolean', ], 'ExcludeUppercaseType' => [ 'type' => 'boolean', ], 'GetRandomPasswordRequest' => [ 'type' => 'structure', 'members' => [ 'PasswordLength' => [ 'shape' => 'PasswordLengthType', 'box' => true, ], 'ExcludeCharacters' => [ 'shape' => 'ExcludeCharactersType', ], 'ExcludeNumbers' => [ 'shape' => 'ExcludeNumbersType', 'box' => true, ], 'ExcludePunctuation' => [ 'shape' => 'ExcludePunctuationType', 'box' => true, ], 'ExcludeUppercase' => [ 'shape' => 'ExcludeUppercaseType', 'box' => true, ], 'ExcludeLowercase' => [ 'shape' => 'ExcludeLowercaseType', 'box' => true, ], 'IncludeSpace' => [ 'shape' => 'IncludeSpaceType', 'box' => true, ], 'RequireEachIncludedType' => [ 'shape' => 'RequireEachIncludedTypeType', 'box' => true, ], ], ], 'GetRandomPasswordResponse' => [ 'type' => 'structure', 'members' => [ 'RandomPassword' => [ 'shape' => 'RandomPasswordType', ], ], ], 'GetResourcePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], ], ], 'GetResourcePolicyResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'NameType', ], 'ResourcePolicy' => [ 'shape' => 'NonEmptyResourcePolicyType', ], ], ], 'GetSecretValueRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], 'VersionStage' => [ 'shape' => 'SecretVersionStageType', ], ], ], 'GetSecretValueResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], 'SecretBinary' => [ 'shape' => 'SecretBinaryType', ], 'SecretString' => [ 'shape' => 'SecretStringType', ], 'VersionStages' => [ 'shape' => 'SecretVersionStagesType', ], 'CreatedDate' => [ 'shape' => 'CreatedDateType', 'box' => true, ], ], ], 'IncludeSpaceType' => [ 'type' => 'boolean', ], 'InternalServiceError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'KmsKeyIdType' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, ], 'LastAccessedDateType' => [ 'type' => 'timestamp', ], 'LastChangedDateType' => [ 'type' => 'timestamp', ], 'LastRotatedDateType' => [ 'type' => 'timestamp', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ListSecretVersionIdsRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'MaxResults' => [ 'shape' => 'MaxResultsType', 'box' => true, ], 'NextToken' => [ 'shape' => 'NextTokenType', ], 'IncludeDeprecated' => [ 'shape' => 'BooleanType', 'box' => true, ], ], ], 'ListSecretVersionIdsResponse' => [ 'type' => 'structure', 'members' => [ 'Versions' => [ 'shape' => 'SecretVersionsListType', ], 'NextToken' => [ 'shape' => 'NextTokenType', ], 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], ], ], 'ListSecretsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResultsType', 'box' => true, ], 'NextToken' => [ 'shape' => 'NextTokenType', ], ], ], 'ListSecretsResponse' => [ 'type' => 'structure', 'members' => [ 'SecretList' => [ 'shape' => 'SecretListType', ], 'NextToken' => [ 'shape' => 'NextTokenType', ], ], ], 'MalformedPolicyDocumentException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'MaxResultsType' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'NameType' => [ 'type' => 'string', 'max' => 512, 'min' => 1, ], 'NextTokenType' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, ], 'NonEmptyResourcePolicyType' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, ], 'PasswordLengthType' => [ 'type' => 'long', 'max' => 4096, 'min' => 1, ], 'PreconditionNotMetException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'PutResourcePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', 'ResourcePolicy', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'ResourcePolicy' => [ 'shape' => 'NonEmptyResourcePolicyType', ], ], ], 'PutResourcePolicyResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'NameType', ], ], ], 'PutSecretValueRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenType', 'idempotencyToken' => true, ], 'SecretBinary' => [ 'shape' => 'SecretBinaryType', ], 'SecretString' => [ 'shape' => 'SecretStringType', ], 'VersionStages' => [ 'shape' => 'SecretVersionStagesType', ], ], ], 'PutSecretValueResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], 'VersionStages' => [ 'shape' => 'SecretVersionStagesType', ], ], ], 'RandomPasswordType' => [ 'type' => 'string', 'max' => 4096, 'min' => 0, ], 'RecoveryWindowInDaysType' => [ 'type' => 'long', ], 'RequireEachIncludedTypeType' => [ 'type' => 'boolean', ], 'ResourceExistsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'RestoreSecretRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], ], ], 'RestoreSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], ], ], 'RotateSecretRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenType', 'idempotencyToken' => true, ], 'RotationLambdaARN' => [ 'shape' => 'RotationLambdaARNType', ], 'RotationRules' => [ 'shape' => 'RotationRulesType', ], ], ], 'RotateSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', 'box' => true, ], ], ], 'RotationEnabledType' => [ 'type' => 'boolean', ], 'RotationLambdaARNType' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, ], 'RotationRulesType' => [ 'type' => 'structure', 'members' => [ 'AutomaticallyAfterDays' => [ 'shape' => 'AutomaticallyRotateAfterDaysType', 'box' => true, ], ], ], 'SecretARNType' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, ], 'SecretBinaryType' => [ 'type' => 'blob', 'max' => 4096, 'min' => 0, 'sensitive' => true, ], 'SecretIdType' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'SecretListEntry' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'Description' => [ 'shape' => 'DescriptionType', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyIdType', ], 'RotationEnabled' => [ 'shape' => 'RotationEnabledType', 'box' => true, ], 'RotationLambdaARN' => [ 'shape' => 'RotationLambdaARNType', ], 'RotationRules' => [ 'shape' => 'RotationRulesType', ], 'LastRotatedDate' => [ 'shape' => 'LastRotatedDateType', 'box' => true, ], 'LastChangedDate' => [ 'shape' => 'LastChangedDateType', 'box' => true, ], 'LastAccessedDate' => [ 'shape' => 'LastAccessedDateType', 'box' => true, ], 'DeletedDate' => [ 'shape' => 'DeletedDateType', ], 'Tags' => [ 'shape' => 'TagListType', ], 'SecretVersionsToStages' => [ 'shape' => 'SecretVersionsToStagesMapType', ], ], ], 'SecretListType' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecretListEntry', ], ], 'SecretNameType' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'SecretStringType' => [ 'type' => 'string', 'max' => 4096, 'min' => 0, 'sensitive' => true, ], 'SecretVersionIdType' => [ 'type' => 'string', 'max' => 64, 'min' => 32, ], 'SecretVersionStageType' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'SecretVersionStagesType' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecretVersionStageType', ], 'max' => 20, 'min' => 1, ], 'SecretVersionsListEntry' => [ 'type' => 'structure', 'members' => [ 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], 'VersionStages' => [ 'shape' => 'SecretVersionStagesType', ], 'LastAccessedDate' => [ 'shape' => 'LastAccessedDateType', 'box' => true, ], 'CreatedDate' => [ 'shape' => 'CreatedDateType', 'box' => true, ], ], ], 'SecretVersionsListType' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecretVersionsListEntry', ], ], 'SecretVersionsToStagesMapType' => [ 'type' => 'map', 'key' => [ 'shape' => 'SecretVersionIdType', ], 'value' => [ 'shape' => 'SecretVersionStagesType', ], ], 'Tag' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'TagKeyType', ], 'Value' => [ 'shape' => 'TagValueType', ], ], ], 'TagKeyListType' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKeyType', ], ], 'TagKeyType' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagListType' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', 'Tags', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'Tags' => [ 'shape' => 'TagListType', ], ], ], 'TagValueType' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', 'TagKeys', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'TagKeys' => [ 'shape' => 'TagKeyListType', ], ], ], 'UpdateSecretRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestTokenType', 'idempotencyToken' => true, ], 'Description' => [ 'shape' => 'DescriptionType', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyIdType', ], 'SecretBinary' => [ 'shape' => 'SecretBinaryType', ], 'SecretString' => [ 'shape' => 'SecretStringType', ], ], ], 'UpdateSecretResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], 'VersionId' => [ 'shape' => 'SecretVersionIdType', ], ], ], 'UpdateSecretVersionStageRequest' => [ 'type' => 'structure', 'required' => [ 'SecretId', 'VersionStage', ], 'members' => [ 'SecretId' => [ 'shape' => 'SecretIdType', ], 'VersionStage' => [ 'shape' => 'SecretVersionStageType', ], 'RemoveFromVersionId' => [ 'shape' => 'SecretVersionIdType', 'box' => true, ], 'MoveToVersionId' => [ 'shape' => 'SecretVersionIdType', 'box' => true, ], ], ], 'UpdateSecretVersionStageResponse' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'SecretARNType', ], 'Name' => [ 'shape' => 'SecretNameType', ], ], ], ],];
